<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateThemeForStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DisplayName
 * @property string|null $FooterLinkURL
 */
class ThemeFooterLink extends Shape
{
    /**
     * @param array{
     *     DisplayName?: string|null,
     *     FooterLinkURL?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
