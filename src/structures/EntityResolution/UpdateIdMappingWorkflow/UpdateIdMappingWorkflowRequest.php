<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateIdMappingWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property Shapes\IdMappingTechniques $idMappingTechniques
 * @property list<Shapes\IdMappingWorkflowInputSource> $inputSourceConfig
 * @property list<Shapes\IdMappingWorkflowOutputSource>|null $outputSourceConfig
 * @property string|null $roleArn
 * @property string $workflowName
 */
class UpdateIdMappingWorkflowRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     idMappingTechniques: Shapes\IdMappingTechniques,
     *     inputSourceConfig: list<Shapes\IdMappingWorkflowInputSource>,
     *     outputSourceConfig?: list<Shapes\IdMappingWorkflowOutputSource>|null,
     *     roleArn?: string|null,
     *     workflowName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
