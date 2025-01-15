<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\CreateWorkflowStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property 'STRING'|'INTEGER'|'STRINGLIST'|'STRINGMAP'|null $dataType
 * @property bool|null $required
 * @property WorkflowStepOutputUnion|null $value
 */
class WorkflowStepOutput extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     dataType?: 'STRING'|'INTEGER'|'STRINGLIST'|'STRINGMAP'|null,
     *     required?: bool|null,
     *     value?: WorkflowStepOutputUnion|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
