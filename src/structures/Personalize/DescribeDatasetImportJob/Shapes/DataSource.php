<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeDatasetImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dataLocation
 */
class DataSource extends Shape
{
    /**
     * @param array{dataLocation?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
