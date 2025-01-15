<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateMatchingWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property Shapes\IncrementalRunConfig|null $incrementalRunConfig
 * @property list<Shapes\InputSource> $inputSourceConfig
 * @property list<Shapes\OutputSource> $outputSourceConfig
 * @property Shapes\ResolutionTechniques $resolutionTechniques
 * @property string $roleArn
 * @property array<string, string>|null $tags
 * @property string $workflowName
 */
class CreateMatchingWorkflowRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     incrementalRunConfig?: Shapes\IncrementalRunConfig|null,
     *     inputSourceConfig: list<Shapes\InputSource>,
     *     outputSourceConfig: list<Shapes\OutputSource>,
     *     resolutionTechniques: Shapes\ResolutionTechniques,
     *     roleArn: string,
     *     tags?: array<string, string>|null,
     *     workflowName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
