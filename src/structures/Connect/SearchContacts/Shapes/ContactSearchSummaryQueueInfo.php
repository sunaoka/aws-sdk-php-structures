<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $EnqueueTimestamp
 */
class ContactSearchSummaryQueueInfo extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     EnqueueTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
