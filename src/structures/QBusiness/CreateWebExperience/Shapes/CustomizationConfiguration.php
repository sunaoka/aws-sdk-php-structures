<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateWebExperience\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $customCSSUrl
 * @property string $logoUrl
 * @property string $fontUrl
 * @property string $faviconUrl
 */
class CustomizationConfiguration extends Shape
{
    /**
     * @param array{
     *     customCSSUrl?: string,
     *     logoUrl?: string,
     *     fontUrl?: string,
     *     faviconUrl?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
