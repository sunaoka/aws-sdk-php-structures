<?php

namespace Sunaoka\Aws\Structures\LakeFormation\UpdateTableStorageOptimizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property array<'COMPACTION'|'GARBAGE_COLLECTION'|'ALL', array<string, string>> $StorageOptimizerConfig
 */
class UpdateTableStorageOptimizerRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseName: string,
     *     TableName: string,
     *     StorageOptimizerConfig: array<'COMPACTION'|'GARBAGE_COLLECTION'|'ALL', array<string, string>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
