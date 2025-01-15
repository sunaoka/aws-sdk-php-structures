<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\ListHealthEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ASName
 * @property int $ASNumber
 * @property string $Country
 * @property string|null $Subdivision
 * @property string|null $Metro
 * @property string|null $City
 * @property double|null $Latitude
 * @property double|null $Longitude
 * @property string|null $CountryCode
 * @property string|null $SubdivisionCode
 * @property string|null $ServiceLocation
 * @property 'ACTIVE'|'RESOLVED' $Status
 * @property NetworkImpairment|null $CausedBy
 * @property InternetHealth|null $InternetHealth
 * @property list<string>|null $Ipv4Prefixes
 */
class ImpactedLocation extends Shape
{
    /**
     * @param array{
     *     ASName: string,
     *     ASNumber: int,
     *     Country: string,
     *     Subdivision?: string|null,
     *     Metro?: string|null,
     *     City?: string|null,
     *     Latitude?: double|null,
     *     Longitude?: double|null,
     *     CountryCode?: string|null,
     *     SubdivisionCode?: string|null,
     *     ServiceLocation?: string|null,
     *     Status: 'ACTIVE'|'RESOLVED',
     *     CausedBy?: NetworkImpairment|null,
     *     InternetHealth?: InternetHealth|null,
     *     Ipv4Prefixes?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
