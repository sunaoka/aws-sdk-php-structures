<?php

namespace Sunaoka\Aws\Structures\drs\AssociateSourceNetworkStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ParticipatingResourceID|null $participatingResourceID
 * @property 'PENDING'|'IN_PROGRESS'|'LAUNCHED'|'FAILED'|'TERMINATED'|null $launchStatus
 */
class ParticipatingResource extends Shape
{
    /**
     * @param array{
     *     participatingResourceID?: ParticipatingResourceID|null,
     *     launchStatus?: 'PENDING'|'IN_PROGRESS'|'LAUNCHED'|'FAILED'|'TERMINATED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
