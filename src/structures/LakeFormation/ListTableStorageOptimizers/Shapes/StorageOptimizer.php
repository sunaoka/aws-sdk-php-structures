<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListTableStorageOptimizers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COMPACTION'|'GARBAGE_COLLECTION'|'ALL'|null $StorageOptimizerType
 * @property array<string, string>|null $Config
 * @property string|null $ErrorMessage
 * @property string|null $Warnings
 * @property string|null $LastRunDetails
 */
class StorageOptimizer extends Shape
{
    /**
     * @param array{
     *     StorageOptimizerType?: 'COMPACTION'|'GARBAGE_COLLECTION'|'ALL'|null,
     *     Config?: array<string, string>|null,
     *     ErrorMessage?: string|null,
     *     Warnings?: string|null,
     *     LastRunDetails?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
