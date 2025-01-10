<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ImportClientBranding\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $Logo
 * @property string|resource|\Psr\Http\Message\StreamInterface $Logo2x
 * @property string|resource|\Psr\Http\Message\StreamInterface $Logo3x
 * @property string $SupportEmail
 * @property string $SupportLink
 * @property string $ForgotPasswordLink
 * @property array<string, string> $LoginMessage
 */
class IosImportClientBrandingAttributes extends Shape
{
    /**
     * @param array{
     *     Logo?: string|resource|\Psr\Http\Message\StreamInterface,
     *     Logo2x?: string|resource|\Psr\Http\Message\StreamInterface,
     *     Logo3x?: string|resource|\Psr\Http\Message\StreamInterface,
     *     SupportEmail?: string,
     *     SupportLink?: string,
     *     ForgotPasswordLink?: string,
     *     LoginMessage?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
