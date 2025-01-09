<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\CreateDataSetImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataSet $dataSet
 * @property ExternalLocation $externalLocation
 */
class DataSetImportItem extends Shape
{
    /**
     * @param array{
     *     dataSet: DataSet,
     *     externalLocation: ExternalLocation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
