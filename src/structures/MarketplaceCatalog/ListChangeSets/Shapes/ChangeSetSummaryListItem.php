<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListChangeSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChangeSetId
 * @property string|null $ChangeSetArn
 * @property string|null $ChangeSetName
 * @property string|null $StartTime
 * @property string|null $EndTime
 * @property 'PREPARING'|'APPLYING'|'SUCCEEDED'|'CANCELLED'|'FAILED'|null $Status
 * @property list<string>|null $EntityIdList
 * @property 'CLIENT_ERROR'|'SERVER_FAULT'|null $FailureCode
 */
class ChangeSetSummaryListItem extends Shape
{
    /**
     * @param array{
     *     ChangeSetId?: string|null,
     *     ChangeSetArn?: string|null,
     *     ChangeSetName?: string|null,
     *     StartTime?: string|null,
     *     EndTime?: string|null,
     *     Status?: 'PREPARING'|'APPLYING'|'SUCCEEDED'|'CANCELLED'|'FAILED'|null,
     *     EntityIdList?: list<string>|null,
     *     FailureCode?: 'CLIENT_ERROR'|'SERVER_FAULT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
