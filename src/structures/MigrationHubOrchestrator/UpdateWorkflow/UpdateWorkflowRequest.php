<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\UpdateWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $name
 * @property string $description
 * @property array<string, Shapes\StepInput> $inputParameters
 * @property list<string> $stepTargets
 */
class UpdateWorkflowRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     name?: string,
     *     description?: string,
     *     inputParameters?: array<string, Shapes\StepInput>,
     *     stepTargets?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
