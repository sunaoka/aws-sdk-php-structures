<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListTransactions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property 'ALL'|'COMPLETED'|'ACTIVE'|'COMMITTED'|'ABORTED' $StatusFilter
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 */
class ListTransactionsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     StatusFilter?: 'ALL'|'COMPLETED'|'ACTIVE'|'COMMITTED'|'ABORTED',
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
