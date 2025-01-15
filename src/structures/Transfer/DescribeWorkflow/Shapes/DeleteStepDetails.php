<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $SourceFileLocation
 */
class DeleteStepDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     SourceFileLocation?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
