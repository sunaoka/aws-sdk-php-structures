<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListProfileHistoryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $ObjectTypeName
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property 'ADDED_PROFILE_KEY'|'DELETED_PROFILE_KEY'|'CREATED'|'UPDATED'|'INGESTED'|'DELETED_BY_CUSTOMER'|'EXPIRED'|'MERGED'|'DELETED_BY_MERGE' $ActionType
 * @property string|null $ProfileObjectUniqueKey
 * @property string|null $PerformedBy
 */
class ProfileHistoryRecord extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     ObjectTypeName: string,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     ActionType: 'ADDED_PROFILE_KEY'|'DELETED_PROFILE_KEY'|'CREATED'|'UPDATED'|'INGESTED'|'DELETED_BY_CUSTOMER'|'EXPIRED'|'MERGED'|'DELETED_BY_MERGE',
     *     ProfileObjectUniqueKey?: string|null,
     *     PerformedBy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
