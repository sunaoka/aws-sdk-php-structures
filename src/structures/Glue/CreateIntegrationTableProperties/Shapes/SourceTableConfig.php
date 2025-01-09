<?php

namespace Sunaoka\Aws\Structures\Glue\CreateIntegrationTableProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Fields
 * @property string $FilterPredicate
 * @property list<string> $PrimaryKey
 * @property string $RecordUpdateField
 */
class SourceTableConfig extends Shape
{
    /**
     * @param array{
     *     Fields?: list<string>,
     *     FilterPredicate?: string,
     *     PrimaryKey?: list<string>,
     *     RecordUpdateField?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
