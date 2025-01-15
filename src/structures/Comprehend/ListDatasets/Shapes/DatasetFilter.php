<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'COMPLETED'|'FAILED'|null $Status
 * @property 'TRAIN'|'TEST'|null $DatasetType
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 */
class DatasetFilter extends Shape
{
    /**
     * @param array{
     *     Status?: 'CREATING'|'COMPLETED'|'FAILED'|null,
     *     DatasetType?: 'TRAIN'|'TEST'|null,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
