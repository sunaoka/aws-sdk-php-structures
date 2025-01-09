<?php

namespace Sunaoka\Aws\Structures\Proton\ListServicePipelineOutputs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentId
 * @property string $nextToken
 * @property string $serviceName
 */
class ListServicePipelineOutputsRequest extends Request
{
    /**
     * @param array{
     *     deploymentId?: string,
     *     nextToken?: string,
     *     serviceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
