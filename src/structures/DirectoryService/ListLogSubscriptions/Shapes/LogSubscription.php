<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ListLogSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DirectoryId
 * @property string|null $LogGroupName
 * @property \Aws\Api\DateTimeResult|null $SubscriptionCreatedDateTime
 */
class LogSubscription extends Shape
{
    /**
     * @param array{
     *     DirectoryId?: string|null,
     *     LogGroupName?: string|null,
     *     SubscriptionCreatedDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
