<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $SourceFileLocation
 */
class DeleteStepDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     SourceFileLocation?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
