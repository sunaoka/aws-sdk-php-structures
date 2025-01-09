<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\CreateDataSetImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DataSetImportItem> $dataSets
 * @property string $s3Location
 */
class DataSetImportConfig extends Shape
{
    /**
     * @param array{
     *     dataSets?: list<DataSetImportItem>,
     *     s3Location?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
