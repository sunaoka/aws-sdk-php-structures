<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DeleteBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributeName
 * @property 'HASH'|'INLINE_FILTER' $SearchSchemaElementType
 */
class SearchSchemaElement extends Shape
{
    /**
     * @param array{
     *     AttributeName: string,
     *     SearchSchemaElementType: 'HASH'|'INLINE_FILTER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
