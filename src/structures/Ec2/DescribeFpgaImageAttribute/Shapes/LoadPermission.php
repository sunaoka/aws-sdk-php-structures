<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFpgaImageAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserId
 * @property 'all'|null $Group
 */
class LoadPermission extends Shape
{
    /**
     * @param array{
     *     UserId?: string|null,
     *     Group?: 'all'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
