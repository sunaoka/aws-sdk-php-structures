<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\PutTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobDefinition
 * @property string $JobName
 * @property BatchArrayProperties $ArrayProperties
 * @property BatchRetryStrategy $RetryStrategy
 */
class BatchParameters extends Shape
{
    /**
     * @param array{
     *     JobDefinition: string,
     *     JobName: string,
     *     ArrayProperties?: BatchArrayProperties,
     *     RetryStrategy?: BatchRetryStrategy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
