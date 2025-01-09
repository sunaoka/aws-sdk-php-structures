<?php

namespace Sunaoka\Aws\Structures\LakeFormation\UpdateTableObjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AddObjectInput $AddObject
 * @property DeleteObjectInput $DeleteObject
 */
class WriteOperation extends Shape
{
    /**
     * @param array{
     *     AddObject?: AddObjectInput,
     *     DeleteObject?: DeleteObjectInput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
