<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateVpcEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainArn
 * @property Shapes\VPCOptions $VpcOptions
 * @property string|null $ClientToken
 */
class CreateVpcEndpointRequest extends Request
{
    /**
     * @param array{
     *     DomainArn: string,
     *     VpcOptions: Shapes\VPCOptions,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
