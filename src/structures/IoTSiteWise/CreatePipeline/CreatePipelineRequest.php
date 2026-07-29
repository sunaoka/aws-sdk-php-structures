<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreatePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property string $pipelineName
 * @property string|null $description
 * @property array<string, string>|null $environmentVariables
 * @property list<Shapes\ComputeNode> $computations
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class CreatePipelineRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     pipelineName: string,
     *     description?: string|null,
     *     environmentVariables?: array<string, string>|null,
     *     computations: list<Shapes\ComputeNode>,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
