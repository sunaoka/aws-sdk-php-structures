<?php

namespace Sunaoka\Aws\Structures\DataPipeline\QueryObjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQ'|'REF_EQ'|'LE'|'GE'|'BETWEEN'|null $type
 * @property list<string>|null $values
 */
class Operator extends Shape
{
    /**
     * @param array{
     *     type?: 'EQ'|'REF_EQ'|'LE'|'GE'|'BETWEEN'|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
