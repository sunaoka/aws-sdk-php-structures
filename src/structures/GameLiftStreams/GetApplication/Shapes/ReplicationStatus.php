<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Location
 * @property 'REPLICATING'|'COMPLETED'|null $Status
 */
class ReplicationStatus extends Shape
{
    /**
     * @param array{
     *     Location?: string|null,
     *     Status?: 'REPLICATING'|'COMPLETED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
