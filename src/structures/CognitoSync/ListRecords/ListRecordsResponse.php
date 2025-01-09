<?php

namespace Sunaoka\Aws\Structures\CognitoSync\ListRecords;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Record> $Records
 * @property string $NextToken
 * @property int $Count
 * @property int $DatasetSyncCount
 * @property string $LastModifiedBy
 * @property list<string> $MergedDatasetNames
 * @property bool $DatasetExists
 * @property bool $DatasetDeletedAfterRequestedSyncCount
 * @property string $SyncSessionToken
 */
class ListRecordsResponse extends Response
{
}
