<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchOpportunities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Title
 * @property list<string>|null $ApnPrograms
 * @property list<OpportunitySearchExpectedCustomerSpend>|null $ExpectedCustomerSpend
 */
class OpportunitySearchProject extends Shape
{
    /**
     * @param array{
     *     Title?: string|null,
     *     ApnPrograms?: list<string>|null,
     *     ExpectedCustomerSpend?: list<OpportunitySearchExpectedCustomerSpend>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
