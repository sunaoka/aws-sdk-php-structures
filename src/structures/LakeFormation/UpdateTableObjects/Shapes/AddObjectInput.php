<?php

namespace Sunaoka\Aws\Structures\LakeFormation\UpdateTableObjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Uri
 * @property string $ETag
 * @property int $Size
 * @property list<string> $PartitionValues
 */
class AddObjectInput extends Shape
{
    /**
     * @param array{
     *     Uri: string,
     *     ETag: string,
     *     Size: int,
     *     PartitionValues?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
