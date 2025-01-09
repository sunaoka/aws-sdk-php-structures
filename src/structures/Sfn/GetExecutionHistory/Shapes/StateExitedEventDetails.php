<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $output
 * @property HistoryEventExecutionDataDetails $outputDetails
 * @property array<string, string> $assignedVariables
 * @property AssignedVariablesDetails $assignedVariablesDetails
 */
class StateExitedEventDetails extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     output?: string,
     *     outputDetails?: HistoryEventExecutionDataDetails,
     *     assignedVariables?: array<string, string>,
     *     assignedVariablesDetails?: AssignedVariablesDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
