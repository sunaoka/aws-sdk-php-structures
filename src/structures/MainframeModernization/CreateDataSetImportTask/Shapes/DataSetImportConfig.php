<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\CreateDataSetImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DataSetImportItem>|null $dataSets
 * @property string|null $s3Location
 */
class DataSetImportConfig extends Shape
{
    /**
     * @param array{
     *     dataSets?: list<DataSetImportItem>|null,
     *     s3Location?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
