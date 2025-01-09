<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeImagePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sharedAccountId
 * @property ImagePermissions $imagePermissions
 */
class SharedImagePermissions extends Shape
{
    /**
     * @param array{
     *     sharedAccountId: string,
     *     imagePermissions: ImagePermissions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
