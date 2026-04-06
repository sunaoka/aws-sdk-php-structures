<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateVpcEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $vpcId
 * @property list<string> $subnetIds
 * @property list<string>|null $securityGroupIds
 * @property string|null $clientToken
 */
class CreateVpcEndpointRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     vpcId: string,
     *     subnetIds: list<string>,
     *     securityGroupIds?: list<string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
