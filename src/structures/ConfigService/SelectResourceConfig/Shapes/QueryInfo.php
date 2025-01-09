<?php

namespace Sunaoka\Aws\Structures\ConfigService\SelectResourceConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldInfo> $SelectFields
 */
class QueryInfo extends Shape
{
    /**
     * @param array{SelectFields?: list<FieldInfo>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
