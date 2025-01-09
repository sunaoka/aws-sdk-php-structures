<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateIdMappingWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property Shapes\IdMappingTechniques $idMappingTechniques
 * @property list<Shapes\IdMappingWorkflowInputSource> $inputSourceConfig
 * @property list<Shapes\IdMappingWorkflowOutputSource> $outputSourceConfig
 * @property string $roleArn
 * @property string $workflowName
 */
class UpdateIdMappingWorkflowRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     idMappingTechniques: Shapes\IdMappingTechniques,
     *     inputSourceConfig: list<Shapes\IdMappingWorkflowInputSource>,
     *     outputSourceConfig?: list<Shapes\IdMappingWorkflowOutputSource>,
     *     roleArn?: string,
     *     workflowName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
