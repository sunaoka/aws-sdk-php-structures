<?php

namespace Sunaoka\Aws\Structures\Detective\ListIndicators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TTPsObservedDetail|null $TTPsObservedDetail
 * @property ImpossibleTravelDetail|null $ImpossibleTravelDetail
 * @property FlaggedIpAddressDetail|null $FlaggedIpAddressDetail
 * @property NewGeolocationDetail|null $NewGeolocationDetail
 * @property NewAsoDetail|null $NewAsoDetail
 * @property NewUserAgentDetail|null $NewUserAgentDetail
 * @property RelatedFindingDetail|null $RelatedFindingDetail
 * @property RelatedFindingGroupDetail|null $RelatedFindingGroupDetail
 */
class IndicatorDetail extends Shape
{
    /**
     * @param array{
     *     TTPsObservedDetail?: TTPsObservedDetail|null,
     *     ImpossibleTravelDetail?: ImpossibleTravelDetail|null,
     *     FlaggedIpAddressDetail?: FlaggedIpAddressDetail|null,
     *     NewGeolocationDetail?: NewGeolocationDetail|null,
     *     NewAsoDetail?: NewAsoDetail|null,
     *     NewUserAgentDetail?: NewUserAgentDetail|null,
     *     RelatedFindingDetail?: RelatedFindingDetail|null,
     *     RelatedFindingGroupDetail?: RelatedFindingGroupDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
