<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetWorkflowStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $integerValue
 * @property string|null $stringValue
 * @property list<string>|null $listOfStringValue
 */
class WorkflowStepOutputUnion extends Shape
{
    /**
     * @param array{
     *     integerValue?: int|null,
     *     stringValue?: string|null,
     *     listOfStringValue?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
