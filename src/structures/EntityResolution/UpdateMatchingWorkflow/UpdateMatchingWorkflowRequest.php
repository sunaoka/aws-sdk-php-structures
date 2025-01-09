<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateMatchingWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property Shapes\IncrementalRunConfig $incrementalRunConfig
 * @property list<Shapes\InputSource> $inputSourceConfig
 * @property list<Shapes\OutputSource> $outputSourceConfig
 * @property Shapes\ResolutionTechniques $resolutionTechniques
 * @property string $roleArn
 * @property string $workflowName
 */
class UpdateMatchingWorkflowRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     incrementalRunConfig?: Shapes\IncrementalRunConfig,
     *     inputSourceConfig: list<Shapes\InputSource>,
     *     outputSourceConfig: list<Shapes\OutputSource>,
     *     resolutionTechniques: Shapes\ResolutionTechniques,
     *     roleArn: string,
     *     workflowName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
