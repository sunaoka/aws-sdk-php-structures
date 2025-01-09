<?php

namespace Sunaoka\Aws\Structures\Ec2\AttachClassicLinkVpc;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $InstanceId
 * @property string $VpcId
 * @property list<string> $Groups
 */
class AttachClassicLinkVpcRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     InstanceId: string,
     *     VpcId: string,
     *     Groups: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
