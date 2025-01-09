<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OutputKey
 * @property string $OutputValue
 * @property string $Description
 */
class RecordOutput extends Shape
{
    /**
     * @param array{
     *     OutputKey?: string,
     *     OutputValue?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
