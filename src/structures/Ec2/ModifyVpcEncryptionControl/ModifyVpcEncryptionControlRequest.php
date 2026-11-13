<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcEncryptionControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $VpcEncryptionControlId
 * @property 'monitor'|'enforce'|null $Mode
 * @property 'enable'|'disable'|null $InternetGatewayExclusion
 * @property 'enable'|'disable'|null $EgressOnlyInternetGatewayExclusion
 * @property 'enable'|'disable'|null $NatGatewayExclusion
 * @property 'enable'|'disable'|null $VirtualPrivateGatewayExclusion
 * @property 'enable'|'disable'|null $VpcPeeringExclusion
 * @property 'enable'|'disable'|null $LambdaExclusion
 * @property 'enable'|'disable'|null $VpcLatticeExclusion
 * @property 'enable'|'disable'|null $ElasticFileSystemExclusion
 * @property 'enable'|'disable'|null $GlobalAcceleratorExclusion
 * @property 'enable'|'disable'|null $ApiGatewayV2Exclusion
 */
class ModifyVpcEncryptionControlRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     VpcEncryptionControlId: string,
     *     Mode?: 'monitor'|'enforce'|null,
     *     InternetGatewayExclusion?: 'enable'|'disable'|null,
     *     EgressOnlyInternetGatewayExclusion?: 'enable'|'disable'|null,
     *     NatGatewayExclusion?: 'enable'|'disable'|null,
     *     VirtualPrivateGatewayExclusion?: 'enable'|'disable'|null,
     *     VpcPeeringExclusion?: 'enable'|'disable'|null,
     *     LambdaExclusion?: 'enable'|'disable'|null,
     *     VpcLatticeExclusion?: 'enable'|'disable'|null,
     *     ElasticFileSystemExclusion?: 'enable'|'disable'|null,
     *     GlobalAcceleratorExclusion?: 'enable'|'disable'|null,
     *     ApiGatewayV2Exclusion?: 'enable'|'disable'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
