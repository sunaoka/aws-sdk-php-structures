<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateVpcEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $addSecurityGroupIds
 * @property list<string> $addSubnetIds
 * @property string $clientToken
 * @property string $id
 * @property list<string> $removeSecurityGroupIds
 * @property list<string> $removeSubnetIds
 */
class UpdateVpcEndpointRequest extends Request
{
    /**
     * @param array{
     *     addSecurityGroupIds?: list<string>,
     *     addSubnetIds?: list<string>,
     *     clientToken?: string,
     *     id: string,
     *     removeSecurityGroupIds?: list<string>,
     *     removeSubnetIds?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
