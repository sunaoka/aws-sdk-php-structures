<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\ListBenefits;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property list<string>|null $Programs
 * @property list<'CREDITS'|'CASH'|'ACCESS'>|null $FulfillmentTypes
 * @property list<'ACTIVE'|'INACTIVE'>|null $Status
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListBenefitsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Programs?: list<string>|null,
     *     FulfillmentTypes?: list<'CREDITS'|'CASH'|'ACCESS'>|null,
     *     Status?: list<'ACTIVE'|'INACTIVE'>|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
