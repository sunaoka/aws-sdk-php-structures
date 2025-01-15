<?php

namespace Sunaoka\Aws\Structures\ConfigService\SelectResourceConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldInfo>|null $SelectFields
 */
class QueryInfo extends Shape
{
    /**
     * @param array{SelectFields?: list<FieldInfo>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
