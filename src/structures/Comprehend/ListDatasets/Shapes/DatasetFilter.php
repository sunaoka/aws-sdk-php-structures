<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'COMPLETED'|'FAILED' $Status
 * @property 'TRAIN'|'TEST' $DatasetType
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 */
class DatasetFilter extends Shape
{
    /**
     * @param array{
     *     Status?: 'CREATING'|'COMPLETED'|'FAILED',
     *     DatasetType?: 'TRAIN'|'TEST',
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
