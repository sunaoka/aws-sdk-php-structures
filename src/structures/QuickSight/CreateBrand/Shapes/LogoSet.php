<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateBrand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageSet $Primary
 * @property ImageSet $Favicon
 */
class LogoSet extends Shape
{
    /**
     * @param array{
     *     Primary: ImageSet,
     *     Favicon?: ImageSet
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
