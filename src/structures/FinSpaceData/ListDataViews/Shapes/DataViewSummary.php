<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListDataViews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dataViewId
 * @property string|null $dataViewArn
 * @property string|null $datasetId
 * @property int|null $asOfTimestamp
 * @property list<string>|null $partitionColumns
 * @property list<string>|null $sortColumns
 * @property 'RUNNING'|'STARTING'|'FAILED'|'CANCELLED'|'TIMEOUT'|'SUCCESS'|'PENDING'|'FAILED_CLEANUP_FAILED'|null $status
 * @property DataViewErrorInfo|null $errorInfo
 * @property DataViewDestinationTypeParams|null $destinationTypeProperties
 * @property bool|null $autoUpdate
 * @property int|null $createTime
 * @property int|null $lastModifiedTime
 */
class DataViewSummary extends Shape
{
    /**
     * @param array{
     *     dataViewId?: string|null,
     *     dataViewArn?: string|null,
     *     datasetId?: string|null,
     *     asOfTimestamp?: int|null,
     *     partitionColumns?: list<string>|null,
     *     sortColumns?: list<string>|null,
     *     status?: 'RUNNING'|'STARTING'|'FAILED'|'CANCELLED'|'TIMEOUT'|'SUCCESS'|'PENDING'|'FAILED_CLEANUP_FAILED'|null,
     *     errorInfo?: DataViewErrorInfo|null,
     *     destinationTypeProperties?: DataViewDestinationTypeParams|null,
     *     autoUpdate?: bool|null,
     *     createTime?: int|null,
     *     lastModifiedTime?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
