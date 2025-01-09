<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeThemeForStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DisplayName
 * @property string $FooterLinkURL
 */
class ThemeFooterLink extends Shape
{
    /**
     * @param array{
     *     DisplayName?: string,
     *     FooterLinkURL?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
