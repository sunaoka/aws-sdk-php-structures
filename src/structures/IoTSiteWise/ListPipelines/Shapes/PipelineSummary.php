<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $pipelineName
 * @property string|null $description
 * @property string $pipelineArn
 * @property string $version
 * @property ResourceStatus $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class PipelineSummary extends Shape
{
    /**
     * @param array{
     *     pipelineName: string,
     *     description?: string|null,
     *     pipelineArn: string,
     *     version: string,
     *     status: ResourceStatus,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
