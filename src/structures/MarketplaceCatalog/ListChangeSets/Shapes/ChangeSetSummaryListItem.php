<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListChangeSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChangeSetId
 * @property string $ChangeSetArn
 * @property string $ChangeSetName
 * @property string $StartTime
 * @property string $EndTime
 * @property 'PREPARING'|'APPLYING'|'SUCCEEDED'|'CANCELLED'|'FAILED' $Status
 * @property list<string> $EntityIdList
 * @property 'CLIENT_ERROR'|'SERVER_FAULT' $FailureCode
 */
class ChangeSetSummaryListItem extends Shape
{
    /**
     * @param array{
     *     ChangeSetId?: string,
     *     ChangeSetArn?: string,
     *     ChangeSetName?: string,
     *     StartTime?: string,
     *     EndTime?: string,
     *     Status?: 'PREPARING'|'APPLYING'|'SUCCEEDED'|'CANCELLED'|'FAILED',
     *     EntityIdList?: list<string>,
     *     FailureCode?: 'CLIENT_ERROR'|'SERVER_FAULT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
