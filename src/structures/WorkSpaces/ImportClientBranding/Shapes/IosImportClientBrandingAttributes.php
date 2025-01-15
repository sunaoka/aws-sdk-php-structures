<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ImportClientBranding\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $Logo
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $Logo2x
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $Logo3x
 * @property string|null $SupportEmail
 * @property string|null $SupportLink
 * @property string|null $ForgotPasswordLink
 * @property array<string, string>|null $LoginMessage
 */
class IosImportClientBrandingAttributes extends Shape
{
    /**
     * @param array{
     *     Logo?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     Logo2x?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     Logo3x?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     SupportEmail?: string|null,
     *     SupportLink?: string|null,
     *     ForgotPasswordLink?: string|null,
     *     LoginMessage?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
