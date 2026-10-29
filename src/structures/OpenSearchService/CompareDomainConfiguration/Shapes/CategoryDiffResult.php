<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CompareDomainConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'compared'|'error'|null $Status
 * @property int<0, max>|null $InSync
 * @property int<0, max>|null $SourceOnly
 * @property int<0, max>|null $TargetOnly
 * @property int<0, max>|null $Diverged
 * @property DiffItems|null $Items
 * @property bool|null $Truncated
 */
class CategoryDiffResult extends Shape
{
    /**
     * @param array{
     *     Status?: 'compared'|'error'|null,
     *     InSync?: int<0, max>|null,
     *     SourceOnly?: int<0, max>|null,
     *     TargetOnly?: int<0, max>|null,
     *     Diverged?: int<0, max>|null,
     *     Items?: DiffItems|null,
     *     Truncated?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
