<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ListLogSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DirectoryId
 * @property string $LogGroupName
 * @property \Aws\Api\DateTimeResult $SubscriptionCreatedDateTime
 */
class LogSubscription extends Shape
{
    /**
     * @param array{
     *     DirectoryId?: string,
     *     LogGroupName?: string,
     *     SubscriptionCreatedDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
