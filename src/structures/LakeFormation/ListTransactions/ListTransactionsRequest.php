<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListTransactions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property 'ALL'|'COMPLETED'|'ACTIVE'|'COMMITTED'|'ABORTED' $StatusFilter
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListTransactionsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     StatusFilter?: 'ALL'|'COMPLETED'|'ACTIVE'|'COMMITTED'|'ABORTED',
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
