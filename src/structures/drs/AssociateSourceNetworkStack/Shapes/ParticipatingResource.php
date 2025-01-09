<?php

namespace Sunaoka\Aws\Structures\drs\AssociateSourceNetworkStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'IN_PROGRESS'|'LAUNCHED'|'FAILED'|'TERMINATED' $launchStatus
 * @property ParticipatingResourceID $participatingResourceID
 */
class ParticipatingResource extends Shape
{
    /**
     * @param array{
     *     launchStatus?: 'PENDING'|'IN_PROGRESS'|'LAUNCHED'|'FAILED'|'TERMINATED',
     *     participatingResourceID?: ParticipatingResourceID
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
