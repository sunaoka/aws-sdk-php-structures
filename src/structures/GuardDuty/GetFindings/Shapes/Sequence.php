<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Uid
 * @property string $Description
 * @property list<Actor>|null $Actors
 * @property list<ResourceV2>|null $Resources
 * @property list<NetworkEndpoint>|null $Endpoints
 * @property list<Signal> $Signals
 * @property list<Indicator>|null $SequenceIndicators
 * @property list<string>|null $AdditionalSequenceTypes
 */
class Sequence extends Shape
{
    /**
     * @param array{
     *     Uid: string,
     *     Description: string,
     *     Actors?: list<Actor>|null,
     *     Resources?: list<ResourceV2>|null,
     *     Endpoints?: list<NetworkEndpoint>|null,
     *     Signals: list<Signal>,
     *     SequenceIndicators?: list<Indicator>|null,
     *     AdditionalSequenceTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
