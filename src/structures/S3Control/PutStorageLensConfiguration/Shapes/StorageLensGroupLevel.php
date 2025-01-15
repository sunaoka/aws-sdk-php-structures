<?php

namespace Sunaoka\Aws\Structures\S3Control\PutStorageLensConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StorageLensGroupLevelSelectionCriteria|null $SelectionCriteria
 */
class StorageLensGroupLevel extends Shape
{
    /**
     * @param array{SelectionCriteria?: StorageLensGroupLevelSelectionCriteria|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
