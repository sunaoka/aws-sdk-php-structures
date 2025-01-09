<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDryRunProgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChangeId
 * @property string $Message
 * @property 'Pending'|'Initializing'|'Validating'|'ValidationFailed'|'ApplyingChanges'|'Completed'|'PendingUserInput'|'Cancelled' $ConfigChangeStatus
 * @property 'CUSTOMER'|'SERVICE' $InitiatedBy
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 */
class ChangeProgressDetails extends Shape
{
    /**
     * @param array{
     *     ChangeId?: string,
     *     Message?: string,
     *     ConfigChangeStatus?: 'Pending'|'Initializing'|'Validating'|'ValidationFailed'|'ApplyingChanges'|'Completed'|'PendingUserInput'|'Cancelled',
     *     InitiatedBy?: 'CUSTOMER'|'SERVICE',
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
