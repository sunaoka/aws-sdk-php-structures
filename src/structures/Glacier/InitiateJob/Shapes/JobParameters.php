<?php

namespace Sunaoka\Aws\Structures\Glacier\InitiateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Format
 * @property string|null $Type
 * @property string|null $ArchiveId
 * @property string|null $Description
 * @property string|null $SNSTopic
 * @property string|null $RetrievalByteRange
 * @property string|null $Tier
 * @property InventoryRetrievalJobInput|null $InventoryRetrievalParameters
 * @property SelectParameters|null $SelectParameters
 * @property OutputLocation|null $OutputLocation
 */
class JobParameters extends Shape
{
    /**
     * @param array{
     *     Format?: string|null,
     *     Type?: string|null,
     *     ArchiveId?: string|null,
     *     Description?: string|null,
     *     SNSTopic?: string|null,
     *     RetrievalByteRange?: string|null,
     *     Tier?: string|null,
     *     InventoryRetrievalParameters?: InventoryRetrievalJobInput|null,
     *     SelectParameters?: SelectParameters|null,
     *     OutputLocation?: OutputLocation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
