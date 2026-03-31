<?php

namespace Sunaoka\Aws\Structures\S3Tables\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'struct' $type
 * @property list<SchemaV2Field> $fields
 * @property int|null $schemaId
 * @property list<int>|null $identifierFieldIds
 */
class IcebergSchemaV2 extends Shape
{
    /**
     * @param array{
     *     type: 'struct',
     *     fields: list<SchemaV2Field>,
     *     schemaId?: int|null,
     *     identifierFieldIds?: list<int>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
