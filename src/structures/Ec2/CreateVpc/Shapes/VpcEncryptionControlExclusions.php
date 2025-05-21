<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpc\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VpcEncryptionControlExclusion|null $InternetGateway
 * @property VpcEncryptionControlExclusion|null $EgressOnlyInternetGateway
 * @property VpcEncryptionControlExclusion|null $NatGateway
 * @property VpcEncryptionControlExclusion|null $VirtualPrivateGateway
 * @property VpcEncryptionControlExclusion|null $VpcPeering
 */
class VpcEncryptionControlExclusions extends Shape
{
    /**
     * @param array{
     *     InternetGateway?: VpcEncryptionControlExclusion|null,
     *     EgressOnlyInternetGateway?: VpcEncryptionControlExclusion|null,
     *     NatGateway?: VpcEncryptionControlExclusion|null,
     *     VirtualPrivateGateway?: VpcEncryptionControlExclusion|null,
     *     VpcPeering?: VpcEncryptionControlExclusion|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
