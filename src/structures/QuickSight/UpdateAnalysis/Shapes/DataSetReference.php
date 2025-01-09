<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSetPlaceholder
 * @property string $DataSetArn
 */
class DataSetReference extends Shape
{
    /**
     * @param array{
     *     DataSetPlaceholder: string,
     *     DataSetArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
