<?php

namespace Sunaoka\Aws\Structures\S3Control\ListAccessPointsForDirectoryBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcId
 */
class VpcConfiguration extends Shape
{
    /**
     * @param array{VpcId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
