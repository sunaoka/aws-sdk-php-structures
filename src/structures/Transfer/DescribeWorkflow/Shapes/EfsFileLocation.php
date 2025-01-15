<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FileSystemId
 * @property string|null $Path
 */
class EfsFileLocation extends Shape
{
    /**
     * @param array{
     *     FileSystemId?: string|null,
     *     Path?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
