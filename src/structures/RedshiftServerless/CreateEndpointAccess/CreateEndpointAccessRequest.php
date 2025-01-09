<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateEndpointAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $endpointName
 * @property string $ownerAccount
 * @property list<string> $subnetIds
 * @property list<string> $vpcSecurityGroupIds
 * @property string $workgroupName
 */
class CreateEndpointAccessRequest extends Request
{
    /**
     * @param array{
     *     endpointName: string,
     *     ownerAccount?: string,
     *     subnetIds: list<string>,
     *     vpcSecurityGroupIds?: list<string>,
     *     workgroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
