<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace RectorPrefix20210517\Symfony\Component\HttpKernel\Exception;

/**
 * @author Kris Wallsmith <kris@symfony.com>
 */
class MethodNotAllowedHttpException extends \RectorPrefix20210517\Symfony\Component\HttpKernel\Exception\HttpException
{
    /**
     * @param string[]        $allow    An array of allowed methods
     * @param string|null     $message  The internal exception message
     * @param \Throwable|null $previous The previous exception
     * @param int|null        $code     The internal exception code
     */
    public function __construct(array $allow, ?string $message = '', \Throwable $previous = null, ?int $code = 0, array $headers = [])
    {
        $headers['Allow'] = \strtoupper(\implode(', ', $allow));
        parent::__construct(405, $message, $previous, $headers, $code);
    }
}
