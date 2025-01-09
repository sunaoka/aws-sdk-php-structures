<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteSecurityGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupId
 * @property string $GroupName
 * @property bool $DryRun
 */
class DeleteSecurityGroupRequest extends Request
{
    /**
     * @param array{
     *     GroupId?: string,
     *     GroupName?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
