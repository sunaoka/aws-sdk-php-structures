<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribePipelineExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property string $pipelineName
 * @property string $pipelineExecutionId
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class DescribePipelineExecutionRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     pipelineName: string,
     *     pipelineExecutionId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
