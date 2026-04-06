<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\CreateDataSetExportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DataSetExportItem>|null $dataSets
 * @property string|null $s3Location
 */
class DataSetExportConfig extends Shape
{
    /**
     * @param array{
     *     dataSets?: list<DataSetExportItem>|null,
     *     s3Location?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
