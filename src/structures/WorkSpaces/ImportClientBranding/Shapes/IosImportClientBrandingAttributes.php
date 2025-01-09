<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ImportClientBranding\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Logo
 * @property string $Logo2x
 * @property string $Logo3x
 * @property string $SupportEmail
 * @property string $SupportLink
 * @property string $ForgotPasswordLink
 * @property array<string, string> $LoginMessage
 */
class IosImportClientBrandingAttributes extends Shape
{
    /**
     * @param array{
     *     Logo?: string,
     *     Logo2x?: string,
     *     Logo3x?: string,
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
