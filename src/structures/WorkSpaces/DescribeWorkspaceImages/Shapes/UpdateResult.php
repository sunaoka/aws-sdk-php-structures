<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $UpdateAvailable
 * @property string|null $Description
 */
class UpdateResult extends Shape
{
    /**
     * @param array{
     *     UpdateAvailable?: bool|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
