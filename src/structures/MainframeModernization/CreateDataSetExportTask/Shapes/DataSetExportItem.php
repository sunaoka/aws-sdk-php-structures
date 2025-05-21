<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\CreateDataSetExportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $datasetName
 * @property ExternalLocation $externalLocation
 */
class DataSetExportItem extends Shape
{
    /**
     * @param array{
     *     datasetName: string,
     *     externalLocation: ExternalLocation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
