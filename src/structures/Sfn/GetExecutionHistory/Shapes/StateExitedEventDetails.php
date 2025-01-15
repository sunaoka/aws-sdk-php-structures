<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $output
 * @property HistoryEventExecutionDataDetails|null $outputDetails
 * @property array<string, string>|null $assignedVariables
 * @property AssignedVariablesDetails|null $assignedVariablesDetails
 */
class StateExitedEventDetails extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     output?: string|null,
     *     outputDetails?: HistoryEventExecutionDataDetails|null,
     *     assignedVariables?: array<string, string>|null,
     *     assignedVariablesDetails?: AssignedVariablesDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
