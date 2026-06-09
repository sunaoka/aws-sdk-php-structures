<?php

namespace Sunaoka\Aws\Structures\Outposts\CreateQuote\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QuoteId
 * @property string|null $AccountId
 * @property 'CREATED'|'ORDER_SUBMITTED'|'EXPIRED'|null $QuoteStatus
 * @property string|null $StatusMessage
 * @property string|null $OutpostArn
 * @property string|null $CountryCode
 * @property list<QuoteCapacity>|null $RequestedCapacities
 * @property list<QuoteConstraint>|null $RequestedConstraints
 * @property list<'ALL_UPFRONT'|'NO_UPFRONT'|'PARTIAL_UPFRONT'>|null $RequestedPaymentOptions
 * @property list<'THREE_YEARS'|'ONE_YEAR'|'FIVE_YEARS'>|null $RequestedPaymentTerms
 * @property list<QuoteOption>|null $QuoteOptions
 * @property list<OrderingRequirement>|null $OrderingRequirements
 * @property string|null $SubmittedOrderId
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property \Aws\Api\DateTimeResult|null $ExpirationDate
 * @property string|null $Description
 */
class Quote extends Shape
{
    /**
     * @param array{
     *     QuoteId?: string|null,
     *     AccountId?: string|null,
     *     QuoteStatus?: 'CREATED'|'ORDER_SUBMITTED'|'EXPIRED'|null,
     *     StatusMessage?: string|null,
     *     OutpostArn?: string|null,
     *     CountryCode?: string|null,
     *     RequestedCapacities?: list<QuoteCapacity>|null,
     *     RequestedConstraints?: list<QuoteConstraint>|null,
     *     RequestedPaymentOptions?: list<'ALL_UPFRONT'|'NO_UPFRONT'|'PARTIAL_UPFRONT'>|null,
     *     RequestedPaymentTerms?: list<'THREE_YEARS'|'ONE_YEAR'|'FIVE_YEARS'>|null,
     *     QuoteOptions?: list<QuoteOption>|null,
     *     OrderingRequirements?: list<OrderingRequirement>|null,
     *     SubmittedOrderId?: string|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     ExpirationDate?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
