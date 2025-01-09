<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateVpcEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $name
 * @property list<string> $securityGroupIds
 * @property list<string> $subnetIds
 * @property string $vpcId
 */
class CreateVpcEndpointRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     name: string,
     *     securityGroupIds?: list<string>,
     *     subnetIds: list<string>,
     *     vpcId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
