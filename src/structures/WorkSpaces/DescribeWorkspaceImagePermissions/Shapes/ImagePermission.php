<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceImagePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SharedAccountId
 */
class ImagePermission extends Shape
{
    /**
     * @param array{SharedAccountId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
