<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdatePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property string $pipelineName
 * @property string|null $description
 * @property array<string, string>|null $environmentVariables
 * @property list<Shapes\ComputeNode>|null $computations
 */
class UpdatePipelineRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     pipelineName: string,
     *     description?: string|null,
     *     environmentVariables?: array<string, string>|null,
     *     computations?: list<Shapes\ComputeNode>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
