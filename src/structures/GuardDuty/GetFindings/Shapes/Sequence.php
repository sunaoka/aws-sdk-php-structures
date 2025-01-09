<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Uid
 * @property string $Description
 * @property list<Actor> $Actors
 * @property list<ResourceV2> $Resources
 * @property list<NetworkEndpoint> $Endpoints
 * @property list<Signal> $Signals
 * @property list<Indicator> $SequenceIndicators
 */
class Sequence extends Shape
{
    /**
     * @param array{
     *     Uid: string,
     *     Description: string,
     *     Actors?: list<Actor>,
     *     Resources?: list<ResourceV2>,
     *     Endpoints?: list<NetworkEndpoint>,
     *     Signals: list<Signal>,
     *     SequenceIndicators?: list<Indicator>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
