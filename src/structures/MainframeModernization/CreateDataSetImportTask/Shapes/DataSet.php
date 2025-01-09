<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\CreateDataSetImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $datasetName
 * @property DatasetOrgAttributes $datasetOrg
 * @property RecordLength $recordLength
 * @property string $relativePath
 * @property string $storageType
 */
class DataSet extends Shape
{
    /**
     * @param array{
     *     datasetName: string,
     *     datasetOrg: DatasetOrgAttributes,
     *     recordLength: RecordLength,
     *     relativePath?: string,
     *     storageType?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
