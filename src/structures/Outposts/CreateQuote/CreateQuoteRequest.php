<?php

namespace Sunaoka\Aws\Structures\Outposts\CreateQuote;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $OutpostIdentifier
 * @property string $CountryCode
 * @property list<Shapes\QuoteCapacity> $RequestedCapacities
 * @property list<Shapes\QuoteConstraint>|null $RequestedConstraints
 * @property list<'ALL_UPFRONT'|'NO_UPFRONT'|'PARTIAL_UPFRONT'>|null $RequestedPaymentOptions
 * @property list<'THREE_YEARS'|'ONE_YEAR'|'FIVE_YEARS'>|null $RequestedPaymentTerms
 * @property string|null $Description
 */
class CreateQuoteRequest extends Request
{
    /**
     * @param array{
     *     OutpostIdentifier?: string|null,
     *     CountryCode: string,
     *     RequestedCapacities: list<Shapes\QuoteCapacity>,
     *     RequestedConstraints?: list<Shapes\QuoteConstraint>|null,
     *     RequestedPaymentOptions?: list<'ALL_UPFRONT'|'NO_UPFRONT'|'PARTIAL_UPFRONT'>|null,
     *     RequestedPaymentTerms?: list<'THREE_YEARS'|'ONE_YEAR'|'FIVE_YEARS'>|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
