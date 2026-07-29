<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateDatasetExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $datasetId
 * @property TrimSettings|null $trimSettings
 * @property list<'VIDEO'|'TELEMETRY'|'ANNOTATION'>|null $exportDataTypes
 */
class DatasetItem extends Shape
{
    /**
     * @param array{
     *     datasetId: string,
     *     trimSettings?: TrimSettings|null,
     *     exportDataTypes?: list<'VIDEO'|'TELEMETRY'|'ANNOTATION'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
