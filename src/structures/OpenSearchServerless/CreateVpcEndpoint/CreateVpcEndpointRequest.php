<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateVpcEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $name
 * @property list<string>|null $securityGroupIds
 * @property list<string> $subnetIds
 * @property string $vpcId
 */
class CreateVpcEndpointRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     name: string,
     *     securityGroupIds?: list<string>|null,
     *     subnetIds: list<string>,
     *     vpcId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
