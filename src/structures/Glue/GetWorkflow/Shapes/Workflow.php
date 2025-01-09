<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property array<string, string> $DefaultRunProperties
 * @property \Aws\Api\DateTimeResult $CreatedOn
 * @property \Aws\Api\DateTimeResult $LastModifiedOn
 * @property WorkflowRun $LastRun
 * @property WorkflowGraph $Graph
 * @property int $MaxConcurrentRuns
 * @property BlueprintDetails $BlueprintDetails
 */
class Workflow extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Description?: string,
     *     DefaultRunProperties?: array<string, string>,
     *     CreatedOn?: \Aws\Api\DateTimeResult,
     *     LastModifiedOn?: \Aws\Api\DateTimeResult,
     *     LastRun?: WorkflowRun,
     *     Graph?: WorkflowGraph,
     *     MaxConcurrentRuns?: int,
     *     BlueprintDetails?: BlueprintDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
