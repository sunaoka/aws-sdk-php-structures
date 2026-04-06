<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetProfileHistoryRecord;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Id
 * @property string $ObjectTypeName
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property 'ADDED_PROFILE_KEY'|'DELETED_PROFILE_KEY'|'CREATED'|'UPDATED'|'INGESTED'|'DELETED_BY_CUSTOMER'|'EXPIRED'|'MERGED'|'DELETED_BY_MERGE' $ActionType
 * @property string|null $ProfileObjectUniqueKey
 * @property string|null $Content
 * @property string|null $PerformedBy
 */
class GetProfileHistoryRecordResponse extends Response
{
}
