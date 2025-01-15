<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteSecurityGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $GroupId
 * @property string|null $GroupName
 * @property bool|null $DryRun
 */
class DeleteSecurityGroupRequest extends Request
{
    /**
     * @param array{
     *     GroupId?: string|null,
     *     GroupName?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
