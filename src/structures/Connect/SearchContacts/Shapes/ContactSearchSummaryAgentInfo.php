<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property \Aws\Api\DateTimeResult|null $ConnectedToAgentTimestamp
 */
class ContactSearchSummaryAgentInfo extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     ConnectedToAgentTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
