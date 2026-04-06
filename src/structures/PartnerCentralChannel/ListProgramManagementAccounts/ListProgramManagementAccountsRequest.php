<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\ListProgramManagementAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $catalog
 * @property int<1, 100>|null $maxResults
 * @property list<string>|null $displayNames
 * @property list<'SOLUTION_PROVIDER'|'DISTRIBUTION'|'DISTRIBUTION_SELLER'>|null $programs
 * @property list<string>|null $accountIds
 * @property list<'PENDING'|'ACTIVE'|'INACTIVE'>|null $statuses
 * @property Shapes\ListProgramManagementAccountsSortBase|null $sort
 * @property string|null $nextToken
 */
class ListProgramManagementAccountsRequest extends Request
{
    /**
     * @param array{
     *     catalog: string,
     *     maxResults?: int<1, 100>|null,
     *     displayNames?: list<string>|null,
     *     programs?: list<'SOLUTION_PROVIDER'|'DISTRIBUTION'|'DISTRIBUTION_SELLER'>|null,
     *     accountIds?: list<string>|null,
     *     statuses?: list<'PENDING'|'ACTIVE'|'INACTIVE'>|null,
     *     sort?: Shapes\ListProgramManagementAccountsSortBase|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
