<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListProfileHistoryRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $ProfileId
 * @property string|null $ObjectTypeName
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property 'ADDED_PROFILE_KEY'|'DELETED_PROFILE_KEY'|'CREATED'|'UPDATED'|'INGESTED'|'DELETED_BY_CUSTOMER'|'EXPIRED'|'MERGED'|'DELETED_BY_MERGE'|null $ActionType
 * @property string|null $PerformedBy
 */
class ListProfileHistoryRecordsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ProfileId: string,
     *     ObjectTypeName?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     ActionType?: 'ADDED_PROFILE_KEY'|'DELETED_PROFILE_KEY'|'CREATED'|'UPDATED'|'INGESTED'|'DELETED_BY_CUSTOMER'|'EXPIRED'|'MERGED'|'DELETED_BY_MERGE'|null,
     *     PerformedBy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
