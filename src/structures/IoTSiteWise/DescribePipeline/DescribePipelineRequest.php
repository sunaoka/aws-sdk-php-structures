<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property string $pipelineName
 * @property string|null $pipelineVersion
 */
class DescribePipelineRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     pipelineName: string,
     *     pipelineVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
