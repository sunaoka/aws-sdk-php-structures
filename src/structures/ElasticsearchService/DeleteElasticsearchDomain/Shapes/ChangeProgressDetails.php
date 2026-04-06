<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DeleteElasticsearchDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChangeId
 * @property string|null $Message
 * @property 'Pending'|'Initializing'|'Validating'|'ValidationFailed'|'ApplyingChanges'|'Completed'|'PendingUserInput'|'Cancelled'|null $ConfigChangeStatus
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property 'CUSTOMER'|'SERVICE'|null $InitiatedBy
 */
class ChangeProgressDetails extends Shape
{
    /**
     * @param array{
     *     ChangeId?: string|null,
     *     Message?: string|null,
     *     ConfigChangeStatus?: 'Pending'|'Initializing'|'Validating'|'ValidationFailed'|'ApplyingChanges'|'Completed'|'PendingUserInput'|'Cancelled'|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     InitiatedBy?: 'CUSTOMER'|'SERVICE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
