<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\UpdateWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $name
 * @property string|null $description
 * @property array<string, Shapes\StepInput>|null $inputParameters
 * @property list<string>|null $stepTargets
 */
class UpdateWorkflowRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     name?: string|null,
     *     description?: string|null,
     *     inputParameters?: array<string, Shapes\StepInput>|null,
     *     stepTargets?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
