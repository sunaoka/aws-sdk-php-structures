<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $output
 * @property HistoryEventExecutionDataDetails|null $outputDetails
 */
class LambdaFunctionSucceededEventDetails extends Shape
{
    /**
     * @param array{
     *     output?: string|null,
     *     outputDetails?: HistoryEventExecutionDataDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
