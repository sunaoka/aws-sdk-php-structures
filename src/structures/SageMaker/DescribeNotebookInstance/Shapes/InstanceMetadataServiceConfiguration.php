<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeNotebookInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MinimumInstanceMetadataServiceVersion
 */
class InstanceMetadataServiceConfiguration extends Shape
{
    /**
     * @param array{MinimumInstanceMetadataServiceVersion: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
