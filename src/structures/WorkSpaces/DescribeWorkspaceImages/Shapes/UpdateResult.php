<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $UpdateAvailable
 * @property string $Description
 */
class UpdateResult extends Shape
{
    /**
     * @param array{
     *     UpdateAvailable?: bool,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
