<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetTableObjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Uri
 * @property string|null $ETag
 * @property int|null $Size
 */
class TableObject extends Shape
{
    /**
     * @param array{
     *     Uri?: string|null,
     *     ETag?: string|null,
     *     Size?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
