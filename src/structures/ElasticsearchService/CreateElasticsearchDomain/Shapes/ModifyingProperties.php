<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\CreateElasticsearchDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $ActiveValue
 * @property string $PendingValue
 * @property 'PLAIN_TEXT'|'STRINGIFIED_JSON' $ValueType
 */
class ModifyingProperties extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     ActiveValue?: string,
     *     PendingValue?: string,
     *     ValueType?: 'PLAIN_TEXT'|'STRINGIFIED_JSON'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
