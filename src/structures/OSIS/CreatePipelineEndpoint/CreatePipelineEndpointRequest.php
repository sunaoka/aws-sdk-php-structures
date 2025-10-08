<?php

namespace Sunaoka\Aws\Structures\OSIS\CreatePipelineEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineArn
 * @property Shapes\PipelineEndpointVpcOptions $VpcOptions
 */
class CreatePipelineEndpointRequest extends Request
{
    /**
     * @param array{
     *     PipelineArn: string,
     *     VpcOptions: Shapes\PipelineEndpointVpcOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
