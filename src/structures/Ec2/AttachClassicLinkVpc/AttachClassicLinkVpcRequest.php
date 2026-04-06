<?php

namespace Sunaoka\Aws\Structures\Ec2\AttachClassicLinkVpc;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<string> $Groups
 * @property string $InstanceId
 * @property string $VpcId
 */
class AttachClassicLinkVpcRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Groups: list<string>,
     *     InstanceId: string,
     *     VpcId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
