<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeletePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property string $pipelineName
 */
class DeletePipelineRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     pipelineName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
