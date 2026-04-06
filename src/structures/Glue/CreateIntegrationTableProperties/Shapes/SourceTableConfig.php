<?php

namespace Sunaoka\Aws\Structures\Glue\CreateIntegrationTableProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Fields
 * @property string|null $FilterPredicate
 * @property list<string>|null $PrimaryKey
 * @property string|null $RecordUpdateField
 */
class SourceTableConfig extends Shape
{
    /**
     * @param array{
     *     Fields?: list<string>|null,
     *     FilterPredicate?: string|null,
     *     PrimaryKey?: list<string>|null,
     *     RecordUpdateField?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
