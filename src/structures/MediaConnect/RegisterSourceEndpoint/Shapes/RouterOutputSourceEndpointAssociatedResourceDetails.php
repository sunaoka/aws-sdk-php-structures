<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RegisterSourceEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property int $MaximumBitrate
 * @property 'CREATING'|'STANDBY'|'STARTING'|'ACTIVE'|'STOPPING'|'DELETING'|'UPDATING'|'ERROR'|'RECOVERING'|'MIGRATING' $State
 * @property list<RouterOutputMessage> $Messages
 */
class RouterOutputSourceEndpointAssociatedResourceDetails extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     MaximumBitrate: int,
     *     State: 'CREATING'|'STANDBY'|'STARTING'|'ACTIVE'|'STOPPING'|'DELETING'|'UPDATING'|'ERROR'|'RECOVERING'|'MIGRATING',
     *     Messages: list<RouterOutputMessage>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
