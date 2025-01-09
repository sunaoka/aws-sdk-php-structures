<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeMyUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IamUserArn
 * @property string $Name
 * @property string $SshUsername
 * @property string $SshPublicKey
 */
class SelfUserProfile extends Shape
{
    /**
     * @param array{
     *     IamUserArn?: string,
     *     Name?: string,
     *     SshUsername?: string,
     *     SshPublicKey?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
