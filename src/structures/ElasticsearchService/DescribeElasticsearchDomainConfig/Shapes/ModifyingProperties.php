<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $ActiveValue
 * @property string|null $PendingValue
 * @property 'PLAIN_TEXT'|'STRINGIFIED_JSON'|null $ValueType
 */
class ModifyingProperties extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     ActiveValue?: string|null,
     *     PendingValue?: string|null,
     *     ValueType?: 'PLAIN_TEXT'|'STRINGIFIED_JSON'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
