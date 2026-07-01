<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyAccountVpcEncryptionControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property 'unmanaged'|'attempt-monitor'|'attempt-enforce'|null $Mode
 * @property 'enable'|'disable'|null $InternetGateway
 * @property 'enable'|'disable'|null $EgressOnlyInternetGateway
 * @property 'enable'|'disable'|null $NatGateway
 * @property 'enable'|'disable'|null $VirtualPrivateGateway
 * @property 'enable'|'disable'|null $VpcPeering
 * @property 'enable'|'disable'|null $Lambda
 * @property 'enable'|'disable'|null $VpcLattice
 * @property 'enable'|'disable'|null $ElasticFileSystem
 */
class ModifyAccountVpcEncryptionControlRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Mode?: 'unmanaged'|'attempt-monitor'|'attempt-enforce'|null,
     *     InternetGateway?: 'enable'|'disable'|null,
     *     EgressOnlyInternetGateway?: 'enable'|'disable'|null,
     *     NatGateway?: 'enable'|'disable'|null,
     *     VirtualPrivateGateway?: 'enable'|'disable'|null,
     *     VpcPeering?: 'enable'|'disable'|null,
     *     Lambda?: 'enable'|'disable'|null,
     *     VpcLattice?: 'enable'|'disable'|null,
     *     ElasticFileSystem?: 'enable'|'disable'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
