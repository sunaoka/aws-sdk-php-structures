<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListTransactions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property 'ALL'|'COMPLETED'|'ACTIVE'|'COMMITTED'|'ABORTED'|null $StatusFilter
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListTransactionsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     StatusFilter?: 'ALL'|'COMPLETED'|'ACTIVE'|'COMMITTED'|'ABORTED'|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
