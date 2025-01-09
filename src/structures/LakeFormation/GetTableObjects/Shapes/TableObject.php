<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetTableObjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Uri
 * @property string $ETag
 * @property int $Size
 */
class TableObject extends Shape
{
    /**
     * @param array{
     *     Uri?: string,
     *     ETag?: string,
     *     Size?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
