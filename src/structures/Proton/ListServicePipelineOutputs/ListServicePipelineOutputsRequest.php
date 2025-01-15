<?php

namespace Sunaoka\Aws\Structures\Proton\ListServicePipelineOutputs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $deploymentId
 * @property string|null $nextToken
 * @property string $serviceName
 */
class ListServicePipelineOutputsRequest extends Request
{
    /**
     * @param array{
     *     deploymentId?: string|null,
     *     nextToken?: string|null,
     *     serviceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
