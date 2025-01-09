<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListDataViews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dataViewId
 * @property string $dataViewArn
 * @property string $datasetId
 * @property int $asOfTimestamp
 * @property list<string> $partitionColumns
 * @property list<string> $sortColumns
 * @property 'RUNNING'|'STARTING'|'FAILED'|'CANCELLED'|'TIMEOUT'|'SUCCESS'|'PENDING'|'FAILED_CLEANUP_FAILED' $status
 * @property DataViewErrorInfo $errorInfo
 * @property DataViewDestinationTypeParams $destinationTypeProperties
 * @property bool $autoUpdate
 * @property int $createTime
 * @property int $lastModifiedTime
 */
class DataViewSummary extends Shape
{
    /**
     * @param array{
     *     dataViewId?: string,
     *     dataViewArn?: string,
     *     datasetId?: string,
     *     asOfTimestamp?: int,
     *     partitionColumns?: list<string>,
     *     sortColumns?: list<string>,
     *     status?: 'RUNNING'|'STARTING'|'FAILED'|'CANCELLED'|'TIMEOUT'|'SUCCESS'|'PENDING'|'FAILED_CLEANUP_FAILED',
     *     errorInfo?: DataViewErrorInfo,
     *     destinationTypeProperties?: DataViewDestinationTypeParams,
     *     autoUpdate?: bool,
     *     createTime?: int,
     *     lastModifiedTime?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
