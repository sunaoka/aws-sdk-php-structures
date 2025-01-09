<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationRefId
 */
class OutputLocationRef extends Shape
{
    /**
     * @param array{DestinationRefId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
