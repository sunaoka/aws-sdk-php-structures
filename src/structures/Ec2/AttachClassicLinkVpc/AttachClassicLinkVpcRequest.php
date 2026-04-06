<?php

namespace Sunaoka\Aws\Structures\Ec2\AttachClassicLinkVpc;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $InstanceId
 * @property string $VpcId
 * @property list<string> $Groups
 */
class AttachClassicLinkVpcRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
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
