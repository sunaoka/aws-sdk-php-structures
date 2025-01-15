<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\GetDataView;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $autoUpdate
 * @property list<string>|null $partitionColumns
 * @property string|null $datasetId
 * @property int|null $asOfTimestamp
 * @property Shapes\DataViewErrorInfo|null $errorInfo
 * @property int|null $lastModifiedTime
 * @property int|null $createTime
 * @property list<string>|null $sortColumns
 * @property string|null $dataViewId
 * @property string|null $dataViewArn
 * @property Shapes\DataViewDestinationTypeParams|null $destinationTypeParams
 * @property 'RUNNING'|'STARTING'|'FAILED'|'CANCELLED'|'TIMEOUT'|'SUCCESS'|'PENDING'|'FAILED_CLEANUP_FAILED'|null $status
 */
class GetDataViewResponse extends Response
{
}
