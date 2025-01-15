<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $DisableUseAsDirectQuerySource
 * @property bool|null $DisableUseAsImportedSource
 */
class DataSetUsageConfiguration extends Shape
{
    /**
     * @param array{
     *     DisableUseAsDirectQuerySource?: bool|null,
     *     DisableUseAsImportedSource?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
