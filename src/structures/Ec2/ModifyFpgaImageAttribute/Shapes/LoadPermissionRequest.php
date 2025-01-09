<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyFpgaImageAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'all' $Group
 * @property string $UserId
 */
class LoadPermissionRequest extends Shape
{
    /**
     * @param array{
     *     Group?: 'all',
     *     UserId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
