<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeDomainChangeProgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChangeId
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property 'PENDING'|'PROCESSING'|'COMPLETED'|'FAILED'|null $Status
 * @property list<string>|null $PendingProperties
 * @property list<string>|null $CompletedProperties
 * @property int|null $TotalNumberOfStages
 * @property list<ChangeProgressStage>|null $ChangeProgressStages
 * @property 'Pending'|'Initializing'|'Validating'|'ValidationFailed'|'ApplyingChanges'|'Completed'|'PendingUserInput'|'Cancelled'|null $ConfigChangeStatus
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
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
     *     ConfigChangeStatus?: 'Pending'|'Initializing'|'Validating'|'ValidationFailed'|'ApplyingChanges'|'Completed'|'PendingUserInput'|'Cancelled'|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     InitiatedBy?: 'CUSTOMER'|'SERVICE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
