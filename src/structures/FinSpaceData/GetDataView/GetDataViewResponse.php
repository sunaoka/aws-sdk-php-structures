<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\GetDataView;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $autoUpdate
 * @property list<string> $partitionColumns
 * @property string $datasetId
 * @property int $asOfTimestamp
 * @property Shapes\DataViewErrorInfo $errorInfo
 * @property int $lastModifiedTime
 * @property int $createTime
 * @property list<string> $sortColumns
 * @property string $dataViewId
 * @property string $dataViewArn
 * @property Shapes\DataViewDestinationTypeParams $destinationTypeParams
 * @property 'RUNNING'|'STARTING'|'FAILED'|'CANCELLED'|'TIMEOUT'|'SUCCESS'|'PENDING'|'FAILED_CLEANUP_FAILED' $status
 */
class GetDataViewResponse extends Response
{
}
