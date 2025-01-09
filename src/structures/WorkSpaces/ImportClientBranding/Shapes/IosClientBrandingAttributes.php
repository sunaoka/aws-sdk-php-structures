<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ImportClientBranding\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LogoUrl
 * @property string $Logo2xUrl
 * @property string $Logo3xUrl
 * @property string $SupportEmail
 * @property string $SupportLink
 * @property string $ForgotPasswordLink
 * @property array<string, string> $LoginMessage
 */
class IosClientBrandingAttributes extends Shape
{
    /**
     * @param array{
     *     LogoUrl?: string,
     *     Logo2xUrl?: string,
     *     Logo3xUrl?: string,
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
