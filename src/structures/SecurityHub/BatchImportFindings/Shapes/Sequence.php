<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Uid
 * @property list<Actor>|null $Actors
 * @property list<NetworkEndpoint>|null $Endpoints
 * @property list<Signal>|null $Signals
 * @property list<Indicator>|null $SequenceIndicators
 */
class Sequence extends Shape
{
    /**
     * @param array{
     *     Uid?: string|null,
     *     Actors?: list<Actor>|null,
     *     Endpoints?: list<NetworkEndpoint>|null,
     *     Signals?: list<Signal>|null,
     *     SequenceIndicators?: list<Indicator>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
