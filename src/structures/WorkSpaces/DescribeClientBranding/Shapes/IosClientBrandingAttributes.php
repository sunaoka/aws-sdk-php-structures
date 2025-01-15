<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeClientBranding\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LogoUrl
 * @property string|null $Logo2xUrl
 * @property string|null $Logo3xUrl
 * @property string|null $SupportEmail
 * @property string|null $SupportLink
 * @property string|null $ForgotPasswordLink
 * @property array<string, string>|null $LoginMessage
 */
class IosClientBrandingAttributes extends Shape
{
    /**
     * @param array{
     *     LogoUrl?: string|null,
     *     Logo2xUrl?: string|null,
     *     Logo3xUrl?: string|null,
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
