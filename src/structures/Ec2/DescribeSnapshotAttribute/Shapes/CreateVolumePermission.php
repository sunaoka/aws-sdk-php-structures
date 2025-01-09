<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSnapshotAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserId
 * @property 'all' $Group
 */
class CreateVolumePermission extends Shape
{
    /**
     * @param array{
     *     UserId?: string,
     *     Group?: 'all'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
