<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateIdMappingWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property Shapes\IdMappingTechniques $idMappingTechniques
 * @property list<Shapes\IdMappingWorkflowInputSource> $inputSourceConfig
 * @property list<Shapes\IdMappingWorkflowOutputSource> $outputSourceConfig
 * @property string $roleArn
 * @property array<string, string> $tags
 * @property string $workflowName
 */
class CreateIdMappingWorkflowRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     idMappingTechniques: Shapes\IdMappingTechniques,
     *     inputSourceConfig: list<Shapes\IdMappingWorkflowInputSource>,
     *     outputSourceConfig?: list<Shapes\IdMappingWorkflowOutputSource>,
     *     roleArn?: string,
     *     tags?: array<string, string>,
     *     workflowName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
