<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateMatchingWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowName
 * @property string|null $description
 * @property list<Shapes\InputSource> $inputSourceConfig
 * @property list<Shapes\OutputSource> $outputSourceConfig
 * @property Shapes\ResolutionTechniques $resolutionTechniques
 * @property Shapes\IncrementalRunConfig|null $incrementalRunConfig
 * @property string $roleArn
 * @property array<string, string>|null $tags
 */
class CreateMatchingWorkflowRequest extends Request
{
    /**
     * @param array{
     *     workflowName: string,
     *     description?: string|null,
     *     inputSourceConfig: list<Shapes\InputSource>,
     *     outputSourceConfig: list<Shapes\OutputSource>,
     *     resolutionTechniques: Shapes\ResolutionTechniques,
     *     incrementalRunConfig?: Shapes\IncrementalRunConfig|null,
     *     roleArn: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
