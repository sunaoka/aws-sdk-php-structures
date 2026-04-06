<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSnapshotAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'all'|null $Group
 * @property string|null $UserId
 */
class CreateVolumePermission extends Shape
{
    /**
     * @param array{
     *     Group?: 'all'|null,
     *     UserId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
