<?php

namespace Sunaoka\Aws\Structures\OpsWorks\GrantAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Username
 * @property string|null $Password
 * @property int|null $ValidForInMinutes
 * @property string|null $InstanceId
 */
class TemporaryCredential extends Shape
{
    /**
     * @param array{
     *     Username?: string|null,
     *     Password?: string|null,
     *     ValidForInMinutes?: int|null,
     *     InstanceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
