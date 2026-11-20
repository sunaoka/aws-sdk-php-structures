<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchOpportunities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StringValue
 * @property list<string>|null $StringListValue
 * @property int|null $LongValue
 * @property double|null $DoubleValue
 * @property \Aws\Api\DateTimeResult|null $DateValue
 */
class OpportunitySearchFilterValue extends Shape
{
    /**
     * @param array{
     *     StringValue?: string|null,
     *     StringListValue?: list<string>|null,
     *     LongValue?: int|null,
     *     DoubleValue?: double|null,
     *     DateValue?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
