<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListTargetsByRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobDefinition
 * @property string $JobName
 * @property BatchArrayProperties|null $ArrayProperties
 * @property BatchRetryStrategy|null $RetryStrategy
 */
class BatchParameters extends Shape
{
    /**
     * @param array{
     *     JobDefinition: string,
     *     JobName: string,
     *     ArrayProperties?: BatchArrayProperties|null,
     *     RetryStrategy?: BatchRetryStrategy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
