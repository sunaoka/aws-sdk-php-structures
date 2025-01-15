<?php

namespace Sunaoka\Aws\Structures\LakeFormation\UpdateTableObjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AddObjectInput|null $AddObject
 * @property DeleteObjectInput|null $DeleteObject
 */
class WriteOperation extends Shape
{
    /**
     * @param array{
     *     AddObject?: AddObjectInput|null,
     *     DeleteObject?: DeleteObjectInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
