<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListTableStorageOptimizers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property 'COMPACTION'|'GARBAGE_COLLECTION'|'ALL' $StorageOptimizerType
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 */
class ListTableStorageOptimizersRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     DatabaseName: string,
     *     TableName: string,
     *     StorageOptimizerType?: 'COMPACTION'|'GARBAGE_COLLECTION'|'ALL',
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
