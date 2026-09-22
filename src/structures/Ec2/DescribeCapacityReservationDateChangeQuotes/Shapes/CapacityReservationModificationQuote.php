<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityReservationDateChangeQuotes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CapacityReservationModificationQuoteId
 * @property string|null $CapacityReservationId
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property \Aws\Api\DateTimeResult|null $ExpirationTime
 * @property 'active'|'expired'|null $QuoteState
 * @property ModificationQuoteCurrentConfiguration|null $CurrentConfiguration
 * @property ModificationTerms|null $ModificationTerms
 * @property list<Tag>|null $Tags
 */
class CapacityReservationModificationQuote extends Shape
{
    /**
     * @param array{
     *     CapacityReservationModificationQuoteId?: string|null,
     *     CapacityReservationId?: string|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     ExpirationTime?: \Aws\Api\DateTimeResult|null,
     *     QuoteState?: 'active'|'expired'|null,
     *     CurrentConfiguration?: ModificationQuoteCurrentConfiguration|null,
     *     ModificationTerms?: ModificationTerms|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
