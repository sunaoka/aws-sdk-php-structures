<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListTableStorageOptimizers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property 'COMPACTION'|'GARBAGE_COLLECTION'|'ALL' $StorageOptimizerType
 * @property int $MaxResults
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
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
