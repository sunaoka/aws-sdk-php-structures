<?php

namespace Sunaoka\Aws\Structures\S3Control\PutStorageLensConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Include
 * @property list<string> $Exclude
 */
class StorageLensGroupLevelSelectionCriteria extends Shape
{
    /**
     * @param array{
     *     Include?: list<string>,
     *     Exclude?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
