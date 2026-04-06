<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeUserProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IamUserArn
 * @property string|null $Name
 * @property string|null $SshUsername
 * @property string|null $SshPublicKey
 * @property bool|null $AllowSelfManagement
 */
class UserProfile extends Shape
{
    /**
     * @param array{
     *     IamUserArn?: string|null,
     *     Name?: string|null,
     *     SshUsername?: string|null,
     *     SshPublicKey?: string|null,
     *     AllowSelfManagement?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
