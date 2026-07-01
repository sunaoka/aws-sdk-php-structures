<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyAccountVpcEncryptionControl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'enabling'|'enabled'|'disabling'|'disabled'|null $InternetGateway
 * @property 'enabling'|'enabled'|'disabling'|'disabled'|null $EgressOnlyInternetGateway
 * @property 'enabling'|'enabled'|'disabling'|'disabled'|null $NatGateway
 * @property 'enabling'|'enabled'|'disabling'|'disabled'|null $VirtualPrivateGateway
 * @property 'enabling'|'enabled'|'disabling'|'disabled'|null $VpcPeering
 * @property 'enabling'|'enabled'|'disabling'|'disabled'|null $Lambda
 * @property 'enabling'|'enabled'|'disabling'|'disabled'|null $VpcLattice
 * @property 'enabling'|'enabled'|'disabling'|'disabled'|null $ElasticFileSystem
 */
class AccountVpcEncryptionControlExclusions extends Shape
{
    /**
     * @param array{
     *     InternetGateway?: 'enabling'|'enabled'|'disabling'|'disabled'|null,
     *     EgressOnlyInternetGateway?: 'enabling'|'enabled'|'disabling'|'disabled'|null,
     *     NatGateway?: 'enabling'|'enabled'|'disabling'|'disabled'|null,
     *     VirtualPrivateGateway?: 'enabling'|'enabled'|'disabling'|'disabled'|null,
     *     VpcPeering?: 'enabling'|'enabled'|'disabling'|'disabled'|null,
     *     Lambda?: 'enabling'|'enabled'|'disabling'|'disabled'|null,
     *     VpcLattice?: 'enabling'|'enabled'|'disabling'|'disabled'|null,
     *     ElasticFileSystem?: 'enabling'|'enabled'|'disabling'|'disabled'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
