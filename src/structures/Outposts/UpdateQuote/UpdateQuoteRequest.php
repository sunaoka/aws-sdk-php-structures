<?php

namespace Sunaoka\Aws\Structures\Outposts\UpdateQuote;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QuoteIdentifier
 * @property string|null $OutpostIdentifier
 * @property string|null $CountryCode
 * @property list<Shapes\QuoteCapacity>|null $RequestedCapacities
 * @property list<Shapes\QuoteConstraint>|null $RequestedConstraints
 * @property list<'ALL_UPFRONT'|'NO_UPFRONT'|'PARTIAL_UPFRONT'>|null $RequestedPaymentOptions
 * @property list<'THREE_YEARS'|'ONE_YEAR'|'FIVE_YEARS'>|null $RequestedPaymentTerms
 * @property string|null $Description
 */
class UpdateQuoteRequest extends Request
{
    /**
     * @param array{
     *     QuoteIdentifier: string,
     *     OutpostIdentifier?: string|null,
     *     CountryCode?: string|null,
     *     RequestedCapacities?: list<Shapes\QuoteCapacity>|null,
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
