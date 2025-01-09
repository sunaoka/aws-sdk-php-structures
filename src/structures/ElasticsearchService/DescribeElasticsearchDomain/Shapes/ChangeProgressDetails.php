<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChangeId
 * @property string $Message
 * @property 'Pending'|'Initializing'|'Validating'|'ValidationFailed'|'ApplyingChanges'|'Completed'|'PendingUserInput'|'Cancelled' $ConfigChangeStatus
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property 'CUSTOMER'|'SERVICE' $InitiatedBy
 */
class ChangeProgressDetails extends Shape
{
    /**
     * @param array{
     *     ChangeId?: string,
     *     Message?: string,
     *     ConfigChangeStatus?: 'Pending'|'Initializing'|'Validating'|'ValidationFailed'|'ApplyingChanges'|'Completed'|'PendingUserInput'|'Cancelled',
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     InitiatedBy?: 'CUSTOMER'|'SERVICE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
