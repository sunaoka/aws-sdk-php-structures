<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DeleteObjectsOnCancel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Uri
 * @property string|null $ETag
 */
class VirtualObject extends Shape
{
    /**
     * @param array{
     *     Uri: string,
     *     ETag?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
