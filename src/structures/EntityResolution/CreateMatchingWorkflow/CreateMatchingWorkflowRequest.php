<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateMatchingWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property Shapes\IncrementalRunConfig $incrementalRunConfig
 * @property list<Shapes\InputSource> $inputSourceConfig
 * @property list<Shapes\OutputSource> $outputSourceConfig
 * @property Shapes\ResolutionTechniques $resolutionTechniques
 * @property string $roleArn
 * @property array<string, string> $tags
 * @property string $workflowName
 */
class CreateMatchingWorkflowRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     incrementalRunConfig?: Shapes\IncrementalRunConfig,
     *     inputSourceConfig: list<Shapes\InputSource>,
     *     outputSourceConfig: list<Shapes\OutputSource>,
     *     resolutionTechniques: Shapes\ResolutionTechniques,
     *     roleArn: string,
     *     tags?: array<string, string>,
     *     workflowName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
