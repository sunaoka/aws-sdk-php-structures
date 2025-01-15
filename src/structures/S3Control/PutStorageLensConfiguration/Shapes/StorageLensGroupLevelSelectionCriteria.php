<?php

namespace Sunaoka\Aws\Structures\S3Control\PutStorageLensConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Include
 * @property list<string>|null $Exclude
 */
class StorageLensGroupLevelSelectionCriteria extends Shape
{
    /**
     * @param array{
     *     Include?: list<string>|null,
     *     Exclude?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
