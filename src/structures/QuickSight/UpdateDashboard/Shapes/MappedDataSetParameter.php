<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSetIdentifier
 * @property string $DataSetParameterName
 */
class MappedDataSetParameter extends Shape
{
    /**
     * @param array{
     *     DataSetIdentifier: string,
     *     DataSetParameterName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
