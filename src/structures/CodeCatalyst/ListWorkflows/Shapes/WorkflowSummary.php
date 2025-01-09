<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListWorkflows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $sourceRepositoryName
 * @property string $sourceBranchName
 * @property WorkflowDefinitionSummary $definition
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property 'QUEUED'|'PARALLEL'|'SUPERSEDED' $runMode
 * @property 'INVALID'|'ACTIVE' $status
 */
class WorkflowSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     sourceRepositoryName: string,
     *     sourceBranchName: string,
     *     definition: WorkflowDefinitionSummary,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     lastUpdatedTime: \Aws\Api\DateTimeResult,
     *     runMode: 'QUEUED'|'PARALLEL'|'SUPERSEDED',
     *     status: 'INVALID'|'ACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
