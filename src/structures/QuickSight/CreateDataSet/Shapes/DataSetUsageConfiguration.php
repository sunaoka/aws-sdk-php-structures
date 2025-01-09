<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $DisableUseAsDirectQuerySource
 * @property bool $DisableUseAsImportedSource
 */
class DataSetUsageConfiguration extends Shape
{
    /**
     * @param array{
     *     DisableUseAsDirectQuerySource?: bool,
     *     DisableUseAsImportedSource?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
