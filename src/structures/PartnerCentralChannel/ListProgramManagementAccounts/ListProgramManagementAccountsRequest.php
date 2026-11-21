<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\ListProgramManagementAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $catalog
 * @property int<1, 100>|null $maxResults
 * @property list<string>|null $displayNames
 * @property list<'SOLUTION_PROVIDER'|'DISTRIBUTION'|'DISTRIBUTION_SELLER'|'MANAGED_SERVICES_PROVIDER'>|null $programs
 * @property list<string>|null $accountIds
 * @property list<'PENDING'|'ACTIVE'|'INACTIVE'>|null $statuses
 * @property Shapes\ListProgramManagementAccountsSortBase|null $sort
 * @property string|null $nextToken
 * @property 'RESALE_BILLING_TRANSFER'|'MANAGED_SERVICES'|null $type
 */
class ListProgramManagementAccountsRequest extends Request
{
    /**
     * @param array{
     *     catalog: string,
     *     maxResults?: int<1, 100>|null,
     *     displayNames?: list<string>|null,
     *     programs?: list<'SOLUTION_PROVIDER'|'DISTRIBUTION'|'DISTRIBUTION_SELLER'|'MANAGED_SERVICES_PROVIDER'>|null,
     *     accountIds?: list<string>|null,
     *     statuses?: list<'PENDING'|'ACTIVE'|'INACTIVE'>|null,
     *     sort?: Shapes\ListProgramManagementAccountsSortBase|null,
     *     nextToken?: string|null,
     *     type?: 'RESALE_BILLING_TRANSFER'|'MANAGED_SERVICES'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
