<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Uid
 * @property list<Actor> $Actors
 * @property list<NetworkEndpoint> $Endpoints
 * @property list<Signal> $Signals
 * @property list<Indicator> $SequenceIndicators
 */
class Sequence extends Shape
{
    /**
     * @param array{
     *     Uid?: string,
     *     Actors?: list<Actor>,
     *     Endpoints?: list<NetworkEndpoint>,
     *     Signals?: list<Signal>,
     *     SequenceIndicators?: list<Indicator>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
