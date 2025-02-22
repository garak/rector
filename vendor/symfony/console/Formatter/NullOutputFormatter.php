<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace RectorPrefix20210517\Symfony\Component\Console\Formatter;

/**
 * @author Tien Xuan Vo <tien.xuan.vo@gmail.com>
 */
final class NullOutputFormatter implements \RectorPrefix20210517\Symfony\Component\Console\Formatter\OutputFormatterInterface
{
    private $style;
    /**
     * {@inheritdoc}
     */
    public function format(?string $message) : void
    {
        // do nothing
    }
    /**
     * {@inheritdoc}
     */
    public function getStyle(string $name) : \RectorPrefix20210517\Symfony\Component\Console\Formatter\OutputFormatterStyleInterface
    {
        if ($this->style) {
            return $this->style;
        }
        // to comply with the interface we must return a OutputFormatterStyleInterface
        return $this->style = new \RectorPrefix20210517\Symfony\Component\Console\Formatter\NullOutputFormatterStyle();
    }
    /**
     * {@inheritdoc}
     */
    public function hasStyle(string $name) : bool
    {
        return \false;
    }
    /**
     * {@inheritdoc}
     */
    public function isDecorated() : bool
    {
        return \false;
    }
    /**
     * {@inheritdoc}
     */
    public function setDecorated(bool $decorated) : void
    {
        // do nothing
    }
    /**
     * {@inheritdoc}
     */
    public function setStyle(string $name, \RectorPrefix20210517\Symfony\Component\Console\Formatter\OutputFormatterStyleInterface $style) : void
    {
        // do nothing
    }
}
