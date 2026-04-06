<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\CreateWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string $templateId
 * @property string|null $applicationConfigurationId
 * @property array<string, Shapes\StepInput> $inputParameters
 * @property list<string>|null $stepTargets
 * @property array<string, string>|null $tags
 */
class CreateWorkflowRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     templateId: string,
     *     applicationConfigurationId?: string|null,
     *     inputParameters: array<string, Shapes\StepInput>,
     *     stepTargets?: list<string>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
