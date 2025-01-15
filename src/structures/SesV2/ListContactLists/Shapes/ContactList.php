<?php

namespace Sunaoka\Aws\Structures\SesV2\ListContactLists\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContactListName
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 */
class ContactList extends Shape
{
    /**
     * @param array{
     *     ContactListName?: string|null,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
