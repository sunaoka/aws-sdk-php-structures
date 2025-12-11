<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpc\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'monitor'|'enforce' $Mode
 * @property 'enable'|'disable'|null $InternetGatewayExclusion
 * @property 'enable'|'disable'|null $EgressOnlyInternetGatewayExclusion
 * @property 'enable'|'disable'|null $NatGatewayExclusion
 * @property 'enable'|'disable'|null $VirtualPrivateGatewayExclusion
 * @property 'enable'|'disable'|null $VpcPeeringExclusion
 * @property 'enable'|'disable'|null $LambdaExclusion
 * @property 'enable'|'disable'|null $VpcLatticeExclusion
 * @property 'enable'|'disable'|null $ElasticFileSystemExclusion
 */
class VpcEncryptionControlConfiguration extends Shape
{
    /**
     * @param array{
     *     Mode: 'monitor'|'enforce',
     *     InternetGatewayExclusion?: 'enable'|'disable'|null,
     *     EgressOnlyInternetGatewayExclusion?: 'enable'|'disable'|null,
     *     NatGatewayExclusion?: 'enable'|'disable'|null,
     *     VirtualPrivateGatewayExclusion?: 'enable'|'disable'|null,
     *     VpcPeeringExclusion?: 'enable'|'disable'|null,
     *     LambdaExclusion?: 'enable'|'disable'|null,
     *     VpcLatticeExclusion?: 'enable'|'disable'|null,
     *     ElasticFileSystemExclusion?: 'enable'|'disable'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
