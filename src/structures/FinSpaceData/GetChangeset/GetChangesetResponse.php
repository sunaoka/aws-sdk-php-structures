<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\GetChangeset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $changesetId
 * @property string $changesetArn
 * @property string $datasetId
 * @property 'REPLACE'|'APPEND'|'MODIFY' $changeType
 * @property array<string, string> $sourceParams
 * @property array<string, string> $formatParams
 * @property int $createTime
 * @property 'PENDING'|'FAILED'|'SUCCESS'|'RUNNING'|'STOP_REQUESTED' $status
 * @property Shapes\ChangesetErrorInfo $errorInfo
 * @property int $activeUntilTimestamp
 * @property int $activeFromTimestamp
 * @property string $updatesChangesetId
 * @property string $updatedByChangesetId
 */
class GetChangesetResponse extends Response
{
}
