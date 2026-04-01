<?php

namespace Sunaoka\Aws\Structures\Sustainability\GetEstimatedCarbonEmissionsDimensionValues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TimePeriod $TimePeriod
 * @property list<'USAGE_ACCOUNT_ID'|'REGION'|'SERVICE'> $Dimensions
 * @property int<1, 5000>|null $MaxResults
 * @property string|null $NextToken
 */
class GetEstimatedCarbonEmissionsDimensionValuesRequest extends Request
{
    /**
     * @param array{
     *     TimePeriod: Shapes\TimePeriod,
     *     Dimensions: list<'USAGE_ACCOUNT_ID'|'REGION'|'SERVICE'>,
     *     MaxResults?: int<1, 5000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
