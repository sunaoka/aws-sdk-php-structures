<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\UpdateWorkflowStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'STRING'|'INTEGER'|'STRINGLIST'|'STRINGMAP' $dataType
 * @property bool $required
 * @property WorkflowStepOutputUnion $value
 */
class WorkflowStepOutput extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     dataType?: 'STRING'|'INTEGER'|'STRINGLIST'|'STRINGMAP',
     *     required?: bool,
     *     value?: WorkflowStepOutputUnion
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
