<?php

namespace Sunaoka\Aws\Structures\Detective\ListIndicators;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GraphArn
 * @property string $InvestigationId
 * @property 'TTP_OBSERVED'|'IMPOSSIBLE_TRAVEL'|'FLAGGED_IP_ADDRESS'|'NEW_GEOLOCATION'|'NEW_ASO'|'NEW_USER_AGENT'|'RELATED_FINDING'|'RELATED_FINDING_GROUP'|null $IndicatorType
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListIndicatorsRequest extends Request
{
    /**
     * @param array{
     *     GraphArn: string,
     *     InvestigationId: string,
     *     IndicatorType?: 'TTP_OBSERVED'|'IMPOSSIBLE_TRAVEL'|'FLAGGED_IP_ADDRESS'|'NEW_GEOLOCATION'|'NEW_ASO'|'NEW_USER_AGENT'|'RELATED_FINDING'|'RELATED_FINDING_GROUP'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
