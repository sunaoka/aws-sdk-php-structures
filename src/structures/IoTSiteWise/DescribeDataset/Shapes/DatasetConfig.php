<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SessionConfig|null $session
 */
class DatasetConfig extends Shape
{
    /**
     * @param array{session?: SessionConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
