<?php

namespace Sunaoka\Aws\Structures\kendra\ListQuerySuggestionsBlockLists\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property 'ACTIVE'|'CREATING'|'DELETING'|'UPDATING'|'ACTIVE_BUT_UPDATE_FAILED'|'FAILED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property int|null $ItemCount
 */
class QuerySuggestionsBlockListSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Status?: 'ACTIVE'|'CREATING'|'DELETING'|'UPDATING'|'ACTIVE_BUT_UPDATE_FAILED'|'FAILED'|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     ItemCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
