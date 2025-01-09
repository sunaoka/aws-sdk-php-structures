<?php

namespace Sunaoka\Aws\Structures\Glacier\InitiateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Format
 * @property string $Type
 * @property string $ArchiveId
 * @property string $Description
 * @property string $SNSTopic
 * @property string $RetrievalByteRange
 * @property string $Tier
 * @property InventoryRetrievalJobInput $InventoryRetrievalParameters
 * @property SelectParameters $SelectParameters
 * @property OutputLocation $OutputLocation
 */
class JobParameters extends Shape
{
    /**
     * @param array{
     *     Format?: string,
     *     Type?: string,
     *     ArchiveId?: string,
     *     Description?: string,
     *     SNSTopic?: string,
     *     RetrievalByteRange?: string,
     *     Tier?: string,
     *     InventoryRetrievalParameters?: InventoryRetrievalJobInput,
     *     SelectParameters?: SelectParameters,
     *     OutputLocation?: OutputLocation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
