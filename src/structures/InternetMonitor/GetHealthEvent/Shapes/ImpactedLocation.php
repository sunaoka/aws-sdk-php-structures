<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\GetHealthEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ASName
 * @property int $ASNumber
 * @property string $Country
 * @property string $Subdivision
 * @property string $Metro
 * @property string $City
 * @property double $Latitude
 * @property double $Longitude
 * @property string $CountryCode
 * @property string $SubdivisionCode
 * @property string $ServiceLocation
 * @property 'ACTIVE'|'RESOLVED' $Status
 * @property NetworkImpairment $CausedBy
 * @property InternetHealth $InternetHealth
 * @property list<string> $Ipv4Prefixes
 */
class ImpactedLocation extends Shape
{
    /**
     * @param array{
     *     ASName: string,
     *     ASNumber: int,
     *     Country: string,
     *     Subdivision?: string,
     *     Metro?: string,
     *     City?: string,
     *     Latitude?: double,
     *     Longitude?: double,
     *     CountryCode?: string,
     *     SubdivisionCode?: string,
     *     ServiceLocation?: string,
     *     Status: 'ACTIVE'|'RESOLVED',
     *     CausedBy?: NetworkImpairment,
     *     InternetHealth?: InternetHealth,
     *     Ipv4Prefixes?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
