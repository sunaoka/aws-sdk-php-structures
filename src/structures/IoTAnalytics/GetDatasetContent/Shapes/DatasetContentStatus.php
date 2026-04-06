<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\GetDatasetContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'SUCCEEDED'|'FAILED'|null $state
 * @property string|null $reason
 */
class DatasetContentStatus extends Shape
{
    /**
     * @param array{
     *     state?: 'CREATING'|'SUCCEEDED'|'FAILED'|null,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
