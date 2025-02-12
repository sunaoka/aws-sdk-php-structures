<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateVpcEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property list<string>|null $addSubnetIds
 * @property list<string>|null $removeSubnetIds
 * @property list<string>|null $addSecurityGroupIds
 * @property list<string>|null $removeSecurityGroupIds
 * @property string|null $clientToken
 */
class UpdateVpcEndpointRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     addSubnetIds?: list<string>|null,
     *     removeSubnetIds?: list<string>|null,
     *     addSecurityGroupIds?: list<string>|null,
     *     removeSecurityGroupIds?: list<string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
