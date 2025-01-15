<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeDatasetImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dataLocation
 */
class DataSource extends Shape
{
    /**
     * @param array{dataLocation?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
