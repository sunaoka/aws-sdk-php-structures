<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\CreateVpcEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainArn
 * @property Shapes\VPCOptions $VpcOptions
 * @property string $ClientToken
 */
class CreateVpcEndpointRequest extends Request
{
    /**
     * @param array{
     *     DomainArn: string,
     *     VpcOptions: Shapes\VPCOptions,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
