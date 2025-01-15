<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OutputKey
 * @property string|null $OutputValue
 * @property string|null $Description
 */
class RecordOutput extends Shape
{
    /**
     * @param array{
     *     OutputKey?: string|null,
     *     OutputValue?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
