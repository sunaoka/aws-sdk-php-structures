<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateSecurityGroupVpc;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupId
 * @property string $VpcId
 * @property bool|null $DryRun
 */
class DisassociateSecurityGroupVpcRequest extends Request
{
    /**
     * @param array{
     *     GroupId: string,
     *     VpcId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
