<?php

namespace Sunaoka\Aws\Structures\SesV2\ListContactLists\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContactListName
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimestamp
 */
class ContactList extends Shape
{
    /**
     * @param array{
     *     ContactListName?: string,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
