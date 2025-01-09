<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetWorkflowStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $integerValue
 * @property string $stringValue
 * @property list<string> $listOfStringValue
 */
class WorkflowStepOutputUnion extends Shape
{
    /**
     * @param array{
     *     integerValue?: int,
     *     stringValue?: string,
     *     listOfStringValue?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
