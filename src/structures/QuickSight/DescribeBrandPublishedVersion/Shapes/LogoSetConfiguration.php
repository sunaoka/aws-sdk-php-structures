<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeBrandPublishedVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageSetConfiguration $Primary
 * @property ImageSetConfiguration|null $Favicon
 */
class LogoSetConfiguration extends Shape
{
    /**
     * @param array{
     *     Primary: ImageSetConfiguration,
     *     Favicon?: ImageSetConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
