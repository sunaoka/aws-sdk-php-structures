<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INITIATION_TIMESTAMP'|'SCHEDULED_TIMESTAMP'|'CONNECTED_TO_AGENT_TIMESTAMP'|'DISCONNECT_TIMESTAMP'|'INITIATION_METHOD'|'CHANNEL'|'EXPIRY_TIMESTAMP' $FieldName
 * @property 'ASCENDING'|'DESCENDING' $Order
 */
class Sort extends Shape
{
    /**
     * @param array{
     *     FieldName: 'INITIATION_TIMESTAMP'|'SCHEDULED_TIMESTAMP'|'CONNECTED_TO_AGENT_TIMESTAMP'|'DISCONNECT_TIMESTAMP'|'INITIATION_METHOD'|'CHANNEL'|'EXPIRY_TIMESTAMP',
     *     Order: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
