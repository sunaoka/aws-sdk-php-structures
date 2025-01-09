<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListTableStorageOptimizers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COMPACTION'|'GARBAGE_COLLECTION'|'ALL' $StorageOptimizerType
 * @property array<string, string> $Config
 * @property string $ErrorMessage
 * @property string $Warnings
 * @property string $LastRunDetails
 */
class StorageOptimizer extends Shape
{
    /**
     * @param array{
     *     StorageOptimizerType?: 'COMPACTION'|'GARBAGE_COLLECTION'|'ALL',
     *     Config?: array<string, string>,
     *     ErrorMessage?: string,
     *     Warnings?: string,
     *     LastRunDetails?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
