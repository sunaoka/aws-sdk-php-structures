<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyFpgaImageAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'all'|null $Group
 * @property string|null $UserId
 */
class LoadPermissionRequest extends Shape
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
