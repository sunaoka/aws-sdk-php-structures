<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribePipeline;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $pipelineName
 * @property string $workspaceName
 * @property string|null $description
 * @property string $pipelineArn
 * @property string $version
 * @property array<string, string>|null $environmentVariables
 * @property list<Shapes\ComputeNode> $computations
 * @property Shapes\ResourceStatus $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class DescribePipelineResponse extends Response
{
}
