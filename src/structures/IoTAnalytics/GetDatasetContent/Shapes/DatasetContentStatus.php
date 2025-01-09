<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\GetDatasetContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'SUCCEEDED'|'FAILED' $state
 * @property string $reason
 */
class DatasetContentStatus extends Shape
{
    /**
     * @param array{
     *     state?: 'CREATING'|'SUCCEEDED'|'FAILED',
     *     reason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
