<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\CreateWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property string $templateId
 * @property string $applicationConfigurationId
 * @property array<string, Shapes\StepInput> $inputParameters
 * @property list<string> $stepTargets
 * @property array<string, string> $tags
 */
class CreateWorkflowRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     templateId: string,
     *     applicationConfigurationId?: string,
     *     inputParameters: array<string, Shapes\StepInput>,
     *     stepTargets?: list<string>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
