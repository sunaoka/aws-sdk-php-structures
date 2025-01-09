<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProjectId
 * @property string $DataSetRegion
 */
class BigQueryParameters extends Shape
{
    /**
     * @param array{
     *     ProjectId: string,
     *     DataSetRegion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
