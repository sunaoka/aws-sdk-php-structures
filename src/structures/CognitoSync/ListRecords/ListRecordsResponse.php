<?php

namespace Sunaoka\Aws\Structures\CognitoSync\ListRecords;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Record>|null $Records
 * @property string|null $NextToken
 * @property int|null $Count
 * @property int|null $DatasetSyncCount
 * @property string|null $LastModifiedBy
 * @property list<string>|null $MergedDatasetNames
 * @property bool|null $DatasetExists
 * @property bool|null $DatasetDeletedAfterRequestedSyncCount
 * @property string|null $SyncSessionToken
 */
class ListRecordsResponse extends Response
{
}
