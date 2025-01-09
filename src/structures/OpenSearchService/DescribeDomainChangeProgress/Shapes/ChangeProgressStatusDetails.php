<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainChangeProgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChangeId
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property 'PENDING'|'PROCESSING'|'COMPLETED'|'FAILED' $Status
 * @property list<string> $PendingProperties
 * @property list<string> $CompletedProperties
 * @property int $TotalNumberOfStages
 * @property list<ChangeProgressStage> $ChangeProgressStages
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property 'Pending'|'Initializing'|'Validating'|'ValidationFailed'|'ApplyingChanges'|'Completed'|'PendingUserInput'|'Cancelled' $ConfigChangeStatus
 * @property 'CUSTOMER'|'SERVICE' $InitiatedBy
 */
class ChangeProgressStatusDetails extends Shape
{
    /**
     * @param array{
     *     ChangeId?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     Status?: 'PENDING'|'PROCESSING'|'COMPLETED'|'FAILED',
     *     PendingProperties?: list<string>,
     *     CompletedProperties?: list<string>,
     *     TotalNumberOfStages?: int,
     *     ChangeProgressStages?: list<ChangeProgressStage>,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     ConfigChangeStatus?: 'Pending'|'Initializing'|'Validating'|'ValidationFailed'|'ApplyingChanges'|'Completed'|'PendingUserInput'|'Cancelled',
     *     InitiatedBy?: 'CUSTOMER'|'SERVICE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
