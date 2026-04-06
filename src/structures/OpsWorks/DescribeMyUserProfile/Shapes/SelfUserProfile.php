<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeMyUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IamUserArn
 * @property string|null $Name
 * @property string|null $SshUsername
 * @property string|null $SshPublicKey
 */
class SelfUserProfile extends Shape
{
    /**
     * @param array{
     *     IamUserArn?: string|null,
     *     Name?: string|null,
     *     SshUsername?: string|null,
     *     SshPublicKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
