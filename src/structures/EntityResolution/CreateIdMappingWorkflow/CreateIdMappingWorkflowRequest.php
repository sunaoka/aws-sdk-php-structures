<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateIdMappingWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property Shapes\IdMappingTechniques $idMappingTechniques
 * @property list<Shapes\IdMappingWorkflowInputSource> $inputSourceConfig
 * @property list<Shapes\IdMappingWorkflowOutputSource>|null $outputSourceConfig
 * @property string|null $roleArn
 * @property array<string, string>|null $tags
 * @property string $workflowName
 */
class CreateIdMappingWorkflowRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     idMappingTechniques: Shapes\IdMappingTechniques,
     *     inputSourceConfig: list<Shapes\IdMappingWorkflowInputSource>,
     *     outputSourceConfig?: list<Shapes\IdMappingWorkflowOutputSource>|null,
     *     roleArn?: string|null,
     *     tags?: array<string, string>|null,
     *     workflowName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
