<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityReservationCancellationQuotes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CapacityReservationCancellationQuoteId
 * @property string|null $CapacityReservationId
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property \Aws\Api\DateTimeResult|null $ExpirationTime
 * @property 'pending'|'active'|'expired'|null $QuoteState
 * @property CapacityReservationConfiguration|null $CurrentConfiguration
 * @property list<CancellationTerms>|null $CancellationTerms
 * @property list<Tag>|null $Tags
 */
class CapacityReservationCancellationQuote extends Shape
{
    /**
     * @param array{
     *     CapacityReservationCancellationQuoteId?: string|null,
     *     CapacityReservationId?: string|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     ExpirationTime?: \Aws\Api\DateTimeResult|null,
     *     QuoteState?: 'pending'|'active'|'expired'|null,
     *     CurrentConfiguration?: CapacityReservationConfiguration|null,
     *     CancellationTerms?: list<CancellationTerms>|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
