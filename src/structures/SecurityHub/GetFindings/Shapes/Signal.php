<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property string $Id
 * @property string $Title
 * @property string $ProductArn
 * @property list<string> $ResourceIds
 * @property list<Indicator> $SignalIndicators
 * @property string $Name
 * @property int $CreatedAt
 * @property int $UpdatedAt
 * @property int $FirstSeenAt
 * @property int $LastSeenAt
 * @property double $Severity
 * @property int $Count
 * @property list<string> $ActorIds
 * @property list<string> $EndpointIds
 */
class Signal extends Shape
{
    /**
     * @param array{
     *     Type?: string,
     *     Id?: string,
     *     Title?: string,
     *     ProductArn?: string,
     *     ResourceIds?: list<string>,
     *     SignalIndicators?: list<Indicator>,
     *     Name?: string,
     *     CreatedAt?: int,
     *     UpdatedAt?: int,
     *     FirstSeenAt?: int,
     *     LastSeenAt?: int,
     *     Severity?: double,
     *     Count?: int,
     *     ActorIds?: list<string>,
     *     EndpointIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
