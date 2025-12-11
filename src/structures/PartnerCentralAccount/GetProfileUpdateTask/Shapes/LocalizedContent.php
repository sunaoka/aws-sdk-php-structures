<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\GetProfileUpdateTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DisplayName
 * @property string $Description
 * @property string $WebsiteUrl
 * @property string $LogoUrl
 * @property string $Locale
 */
class LocalizedContent extends Shape
{
    /**
     * @param array{
     *     DisplayName: string,
     *     Description: string,
     *     WebsiteUrl: string,
     *     LogoUrl: string,
     *     Locale: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
