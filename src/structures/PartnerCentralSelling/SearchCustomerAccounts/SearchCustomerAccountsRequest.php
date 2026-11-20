<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchCustomerAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property Shapes\Filter|null $Filter
 * @property Shapes\CustomerAccountSort|null $Sort
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class SearchCustomerAccountsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Filter?: Shapes\Filter|null,
     *     Sort?: Shapes\CustomerAccountSort|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
