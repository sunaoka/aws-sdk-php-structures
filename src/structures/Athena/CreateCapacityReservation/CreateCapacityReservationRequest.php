<?php

namespace Sunaoka\Aws\Structures\Athena\CreateCapacityReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $TargetDpus
 * @property string $Name
 * @property list<Shapes\Tag> $Tags
 */
class CreateCapacityReservationRequest extends Request
{
    /**
     * @param array{
     *     TargetDpus: int,
     *     Name: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
