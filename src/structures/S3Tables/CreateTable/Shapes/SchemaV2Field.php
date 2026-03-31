<?php

namespace Sunaoka\Aws\Structures\S3Tables\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $id
 * @property string $name
 * @property Document $type
 * @property bool $required
 * @property string|null $doc
 */
class SchemaV2Field extends Shape
{
    /**
     * @param array{
     *     id: int,
     *     name: string,
     *     type: Document,
     *     required: bool,
     *     doc?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
