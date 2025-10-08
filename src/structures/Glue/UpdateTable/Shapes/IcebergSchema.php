<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $SchemaId
 * @property list<int>|null $IdentifierFieldIds
 * @property 'struct'|null $Type
 * @property list<IcebergStructField> $Fields
 */
class IcebergSchema extends Shape
{
    /**
     * @param array{
     *     SchemaId?: int|null,
     *     IdentifierFieldIds?: list<int>|null,
     *     Type?: 'struct'|null,
     *     Fields: list<IcebergStructField>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
