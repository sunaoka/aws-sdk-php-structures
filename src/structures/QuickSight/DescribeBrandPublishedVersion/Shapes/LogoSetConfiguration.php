<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeBrandPublishedVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageSetConfiguration $Primary
 * @property ImageSetConfiguration $Favicon
 */
class LogoSetConfiguration extends Shape
{
    /**
     * @param array{
     *     Primary: ImageSetConfiguration,
     *     Favicon?: ImageSetConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
