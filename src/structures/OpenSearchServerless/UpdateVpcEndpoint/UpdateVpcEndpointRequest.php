<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateVpcEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $addSecurityGroupIds
 * @property list<string>|null $addSubnetIds
 * @property string|null $clientToken
 * @property string $id
 * @property list<string>|null $removeSecurityGroupIds
 * @property list<string>|null $removeSubnetIds
 */
class UpdateVpcEndpointRequest extends Request
{
    /**
     * @param array{
     *     addSecurityGroupIds?: list<string>|null,
     *     addSubnetIds?: list<string>|null,
     *     clientToken?: string|null,
     *     id: string,
     *     removeSecurityGroupIds?: list<string>|null,
     *     removeSubnetIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
