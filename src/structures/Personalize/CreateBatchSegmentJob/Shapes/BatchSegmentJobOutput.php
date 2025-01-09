<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateBatchSegmentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3DataConfig $s3DataDestination
 */
class BatchSegmentJobOutput extends Shape
{
    /**
     * @param array{s3DataDestination: S3DataConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
