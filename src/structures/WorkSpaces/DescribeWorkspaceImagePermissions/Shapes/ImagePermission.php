<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceImagePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SharedAccountId
 */
class ImagePermission extends Shape
{
    /**
     * @param array{SharedAccountId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
