<?php

namespace Sunaoka\Aws\Structures\Outposts\GetPrivateConnectivityConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RoleArn
 * @property 'ENABLED'|'DISABLED'|null $PrivateConnectivityStatus
 * @property list<VpcInformation>|null $VpcInformationList
 * @property string|null $ProvisioningRoleArn
 */
class PrivateConnectivityConfig extends Shape
{
    /**
     * @param array{
     *     RoleArn?: string|null,
     *     PrivateConnectivityStatus?: 'ENABLED'|'DISABLED'|null,
     *     VpcInformationList?: list<VpcInformation>|null,
     *     ProvisioningRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
