<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Type
 * @property string|null $Id
 * @property string|null $Title
 * @property string|null $ProductArn
 * @property list<string>|null $ResourceIds
 * @property list<Indicator>|null $SignalIndicators
 * @property string|null $Name
 * @property int|null $CreatedAt
 * @property int|null $UpdatedAt
 * @property int|null $FirstSeenAt
 * @property int|null $LastSeenAt
 * @property double|null $Severity
 * @property int|null $Count
 * @property list<string>|null $ActorIds
 * @property list<string>|null $EndpointIds
 */
class Signal extends Shape
{
    /**
     * @param array{
     *     Type?: string|null,
     *     Id?: string|null,
     *     Title?: string|null,
     *     ProductArn?: string|null,
     *     ResourceIds?: list<string>|null,
     *     SignalIndicators?: list<Indicator>|null,
     *     Name?: string|null,
     *     CreatedAt?: int|null,
     *     UpdatedAt?: int|null,
     *     FirstSeenAt?: int|null,
     *     LastSeenAt?: int|null,
     *     Severity?: double|null,
     *     Count?: int|null,
     *     ActorIds?: list<string>|null,
     *     EndpointIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
