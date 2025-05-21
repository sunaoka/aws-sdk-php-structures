<?php

namespace Sunaoka\Aws\Structures\S3Tables\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $type
 * @property bool|null $required
 */
class SchemaField extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: string,
     *     required?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
