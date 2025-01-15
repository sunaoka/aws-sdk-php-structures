<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListTableStorageOptimizers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property 'COMPACTION'|'GARBAGE_COLLECTION'|'ALL'|null $StorageOptimizerType
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListTableStorageOptimizersRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseName: string,
     *     TableName: string,
     *     StorageOptimizerType?: 'COMPACTION'|'GARBAGE_COLLECTION'|'ALL'|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
