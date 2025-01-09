<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeUserProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IamUserArn
 * @property string $Name
 * @property string $SshUsername
 * @property string $SshPublicKey
 * @property bool $AllowSelfManagement
 */
class UserProfile extends Shape
{
    /**
     * @param array{
     *     IamUserArn?: string,
     *     Name?: string,
     *     SshUsername?: string,
     *     SshPublicKey?: string,
     *     AllowSelfManagement?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
