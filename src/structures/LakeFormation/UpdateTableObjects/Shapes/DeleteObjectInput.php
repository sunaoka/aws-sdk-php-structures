<?php

namespace Sunaoka\Aws\Structures\LakeFormation\UpdateTableObjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Uri
 * @property string|null $ETag
 * @property list<string>|null $PartitionValues
 */
class DeleteObjectInput extends Shape
{
    /**
     * @param array{
     *     Uri: string,
     *     ETag?: string|null,
     *     PartitionValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
