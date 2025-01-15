<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\GetChangeset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $changesetId
 * @property string|null $changesetArn
 * @property string|null $datasetId
 * @property 'REPLACE'|'APPEND'|'MODIFY'|null $changeType
 * @property array<string, string>|null $sourceParams
 * @property array<string, string>|null $formatParams
 * @property int|null $createTime
 * @property 'PENDING'|'FAILED'|'SUCCESS'|'RUNNING'|'STOP_REQUESTED'|null $status
 * @property Shapes\ChangesetErrorInfo|null $errorInfo
 * @property int|null $activeUntilTimestamp
 * @property int|null $activeFromTimestamp
 * @property string|null $updatesChangesetId
 * @property string|null $updatedByChangesetId
 */
class GetChangesetResponse extends Response
{
}
