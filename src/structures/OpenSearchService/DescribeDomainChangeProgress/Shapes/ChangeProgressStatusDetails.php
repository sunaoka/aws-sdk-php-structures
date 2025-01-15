<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainChangeProgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChangeId
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property 'PENDING'|'PROCESSING'|'COMPLETED'|'FAILED'|null $Status
 * @property list<string>|null $PendingProperties
 * @property list<string>|null $CompletedProperties
 * @property int|null $TotalNumberOfStages
 * @property list<ChangeProgressStage>|null $ChangeProgressStages
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property 'Pending'|'Initializing'|'Validating'|'ValidationFailed'|'ApplyingChanges'|'Completed'|'PendingUserInput'|'Cancelled'|null $ConfigChangeStatus
 * @property 'CUSTOMER'|'SERVICE'|null $InitiatedBy
 */
class ChangeProgressStatusDetails extends Shape
{
    /**
     * @param array{
     *     ChangeId?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'PENDING'|'PROCESSING'|'COMPLETED'|'FAILED'|null,
     *     PendingProperties?: list<string>|null,
     *     CompletedProperties?: list<string>|null,
     *     TotalNumberOfStages?: int|null,
     *     ChangeProgressStages?: list<ChangeProgressStage>|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     ConfigChangeStatus?: 'Pending'|'Initializing'|'Validating'|'ValidationFailed'|'ApplyingChanges'|'Completed'|'PendingUserInput'|'Cancelled'|null,
     *     InitiatedBy?: 'CUSTOMER'|'SERVICE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
