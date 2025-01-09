<?php

namespace Sunaoka\Aws\Structures\Detective\ListIndicators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TTP_OBSERVED'|'IMPOSSIBLE_TRAVEL'|'FLAGGED_IP_ADDRESS'|'NEW_GEOLOCATION'|'NEW_ASO'|'NEW_USER_AGENT'|'RELATED_FINDING'|'RELATED_FINDING_GROUP' $IndicatorType
 * @property IndicatorDetail $IndicatorDetail
 */
class Indicator extends Shape
{
    /**
     * @param array{
     *     IndicatorType?: 'TTP_OBSERVED'|'IMPOSSIBLE_TRAVEL'|'FLAGGED_IP_ADDRESS'|'NEW_GEOLOCATION'|'NEW_ASO'|'NEW_USER_AGENT'|'RELATED_FINDING'|'RELATED_FINDING_GROUP',
     *     IndicatorDetail?: IndicatorDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
