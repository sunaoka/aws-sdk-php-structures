<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateWebExperience\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $customCSSUrl
 * @property string|null $logoUrl
 * @property string|null $fontUrl
 * @property string|null $faviconUrl
 */
class CustomizationConfiguration extends Shape
{
    /**
     * @param array{
     *     customCSSUrl?: string|null,
     *     logoUrl?: string|null,
     *     fontUrl?: string|null,
     *     faviconUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
