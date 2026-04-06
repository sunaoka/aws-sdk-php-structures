<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OutputLocationRef $Destination
 */
class MediaPackageGroupSettings extends Shape
{
    /**
     * @param array{Destination: OutputLocationRef} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
