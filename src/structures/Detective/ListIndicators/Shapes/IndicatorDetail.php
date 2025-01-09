<?php

namespace Sunaoka\Aws\Structures\Detective\ListIndicators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TTPsObservedDetail $TTPsObservedDetail
 * @property ImpossibleTravelDetail $ImpossibleTravelDetail
 * @property FlaggedIpAddressDetail $FlaggedIpAddressDetail
 * @property NewGeolocationDetail $NewGeolocationDetail
 * @property NewAsoDetail $NewAsoDetail
 * @property NewUserAgentDetail $NewUserAgentDetail
 * @property RelatedFindingDetail $RelatedFindingDetail
 * @property RelatedFindingGroupDetail $RelatedFindingGroupDetail
 */
class IndicatorDetail extends Shape
{
    /**
     * @param array{
     *     TTPsObservedDetail?: TTPsObservedDetail,
     *     ImpossibleTravelDetail?: ImpossibleTravelDetail,
     *     FlaggedIpAddressDetail?: FlaggedIpAddressDetail,
     *     NewGeolocationDetail?: NewGeolocationDetail,
     *     NewAsoDetail?: NewAsoDetail,
     *     NewUserAgentDetail?: NewUserAgentDetail,
     *     RelatedFindingDetail?: RelatedFindingDetail,
     *     RelatedFindingGroupDetail?: RelatedFindingGroupDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
