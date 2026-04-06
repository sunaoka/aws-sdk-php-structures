<?php

namespace Sunaoka\Aws\Structures\Sfn\TestState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $retrierRetryCount
 * @property string|null $errorCausedByState
 * @property int<0, max>|null $mapIterationFailureCount
 * @property string|null $mapItemReaderData
 */
class TestStateConfiguration extends Shape
{
    /**
     * @param array{
     *     retrierRetryCount?: int<0, max>|null,
     *     errorCausedByState?: string|null,
     *     mapIterationFailureCount?: int<0, max>|null,
     *     mapItemReaderData?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
