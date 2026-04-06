<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcEncryptionControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $VpcId
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class CreateVpcEncryptionControlRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     VpcId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
