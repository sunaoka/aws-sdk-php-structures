<?php

namespace Sunaoka\Aws\Structures\Ec2\DetachClassicLinkVpc;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $InstanceId
 * @property string $VpcId
 */
class DetachClassicLinkVpcRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     InstanceId: string,
     *     VpcId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
