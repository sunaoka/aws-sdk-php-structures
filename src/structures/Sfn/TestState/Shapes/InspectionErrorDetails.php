<?php

namespace Sunaoka\Aws\Structures\Sfn\TestState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $catchIndex
 * @property int<0, max>|null $retryIndex
 * @property int<0, max>|null $retryBackoffIntervalSeconds
 */
class InspectionErrorDetails extends Shape
{
    /**
     * @param array{
     *     catchIndex?: int<0, max>|null,
     *     retryIndex?: int<0, max>|null,
     *     retryBackoffIntervalSeconds?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
