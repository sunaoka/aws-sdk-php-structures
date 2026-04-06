<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateEndpointAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $endpointName
 * @property list<string> $subnetIds
 * @property list<string>|null $vpcSecurityGroupIds
 * @property string $workgroupName
 */
class CreateEndpointAccessRequest extends Request
{
    /**
     * @param array{
     *     endpointName: string,
     *     subnetIds: list<string>,
     *     vpcSecurityGroupIds?: list<string>|null,
     *     workgroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
