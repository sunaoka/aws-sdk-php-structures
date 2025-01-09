<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $output
 * @property HistoryEventExecutionDataDetails $outputDetails
 */
class ActivitySucceededEventDetails extends Shape
{
    /**
     * @param array{
     *     output?: string,
     *     outputDetails?: HistoryEventExecutionDataDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
