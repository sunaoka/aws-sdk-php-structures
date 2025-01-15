<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property array<string, string>|null $DefaultRunProperties
 * @property \Aws\Api\DateTimeResult|null $CreatedOn
 * @property \Aws\Api\DateTimeResult|null $LastModifiedOn
 * @property WorkflowRun|null $LastRun
 * @property WorkflowGraph|null $Graph
 * @property int|null $MaxConcurrentRuns
 * @property BlueprintDetails|null $BlueprintDetails
 */
class Workflow extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     DefaultRunProperties?: array<string, string>|null,
     *     CreatedOn?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedOn?: \Aws\Api\DateTimeResult|null,
     *     LastRun?: WorkflowRun|null,
     *     Graph?: WorkflowGraph|null,
     *     MaxConcurrentRuns?: int|null,
     *     BlueprintDetails?: BlueprintDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
