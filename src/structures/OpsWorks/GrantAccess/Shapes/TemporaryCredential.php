<?php

namespace Sunaoka\Aws\Structures\OpsWorks\GrantAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Username
 * @property string $Password
 * @property int $ValidForInMinutes
 * @property string $InstanceId
 */
class TemporaryCredential extends Shape
{
    /**
     * @param array{
     *     Username?: string,
     *     Password?: string,
     *     ValidForInMinutes?: int,
     *     InstanceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
