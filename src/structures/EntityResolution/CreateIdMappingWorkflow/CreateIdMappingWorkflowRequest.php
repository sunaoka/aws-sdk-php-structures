<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateIdMappingWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowName
 * @property string|null $description
 * @property list<Shapes\IdMappingWorkflowInputSource> $inputSourceConfig
 * @property list<Shapes\IdMappingWorkflowOutputSource>|null $outputSourceConfig
 * @property Shapes\IdMappingTechniques $idMappingTechniques
 * @property Shapes\IdMappingIncrementalRunConfig|null $incrementalRunConfig
 * @property string|null $roleArn
 * @property array<string, string>|null $tags
 */
class CreateIdMappingWorkflowRequest extends Request
{
    /**
     * @param array{
     *     workflowName: string,
     *     description?: string|null,
     *     inputSourceConfig: list<Shapes\IdMappingWorkflowInputSource>,
     *     outputSourceConfig?: list<Shapes\IdMappingWorkflowOutputSource>|null,
     *     idMappingTechniques: Shapes\IdMappingTechniques,
     *     incrementalRunConfig?: Shapes\IdMappingIncrementalRunConfig|null,
     *     roleArn?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
