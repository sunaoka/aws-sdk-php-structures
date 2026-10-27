<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RegisterDestinationEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property int $MaximumBitrate
 * @property 'CREATING'|'STANDBY'|'STARTING'|'ACTIVE'|'STOPPING'|'DELETING'|'UPDATING'|'ERROR'|'RECOVERING'|'MIGRATING' $State
 * @property list<RouterInputMessage> $Messages
 */
class RouterInputDestinationEndpointAssociatedResourceDetails extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     MaximumBitrate: int,
     *     State: 'CREATING'|'STANDBY'|'STARTING'|'ACTIVE'|'STOPPING'|'DELETING'|'UPDATING'|'ERROR'|'RECOVERING'|'MIGRATING',
     *     Messages: list<RouterInputMessage>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
