<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetTableObjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property string $TransactionId
 * @property \Aws\Api\DateTimeResult $QueryAsOfTime
 * @property string $PartitionPredicate
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 */
class GetTableObjectsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     DatabaseName: string,
     *     TableName: string,
     *     TransactionId?: string,
     *     QueryAsOfTime?: \Aws\Api\DateTimeResult,
     *     PartitionPredicate?: string,
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
