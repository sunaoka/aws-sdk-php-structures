<?php

namespace Sunaoka\Aws\Structures\DataPipeline\QueryObjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQ'|'REF_EQ'|'LE'|'GE'|'BETWEEN' $type
 * @property list<string> $values
 */
class Operator extends Shape
{
    /**
     * @param array{
     *     type?: 'EQ'|'REF_EQ'|'LE'|'GE'|'BETWEEN',
     *     values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
