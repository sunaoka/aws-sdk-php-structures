<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KendraSourceDetail $kendra
 */
class SourceDetail extends Shape
{
    /**
     * @param array{kendra?: KendraSourceDetail} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
