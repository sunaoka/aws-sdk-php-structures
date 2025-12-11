<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\ListBenefitAllocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property list<'CREDITS'|'CASH'|'ACCESS'>|null $FulfillmentTypes
 * @property list<string>|null $BenefitIdentifiers
 * @property list<string>|null $BenefitApplicationIdentifiers
 * @property list<'ACTIVE'|'INACTIVE'|'FULFILLED'>|null $Status
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListBenefitAllocationsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     FulfillmentTypes?: list<'CREDITS'|'CASH'|'ACCESS'>|null,
     *     BenefitIdentifiers?: list<string>|null,
     *     BenefitApplicationIdentifiers?: list<string>|null,
     *     Status?: list<'ACTIVE'|'INACTIVE'|'FULFILLED'>|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
