<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fileName
 */
class OutputFileUriValue extends Shape
{
    /**
     * @param array{fileName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
