<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreatePrefetchSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $DynamicVariables
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property \Aws\Api\DateTimeResult $StartTime
 */
class PrefetchRetrieval extends Shape
{
    /**
     * @param array{
     *     DynamicVariables?: array<string, string>,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     StartTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
