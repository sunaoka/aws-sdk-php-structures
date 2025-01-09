<?php

namespace Sunaoka\Aws\Structures\LakeFormation\UpdateTableObjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Uri
 * @property string $ETag
 * @property list<string> $PartitionValues
 */
class DeleteObjectInput extends Shape
{
    /**
     * @param array{
     *     Uri: string,
     *     ETag?: string,
     *     PartitionValues?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
