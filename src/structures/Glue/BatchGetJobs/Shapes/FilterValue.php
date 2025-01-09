<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COLUMNEXTRACTED'|'CONSTANT' $Type
 * @property list<string> $Value
 */
class FilterValue extends Shape
{
    /**
     * @param array{
     *     Type: 'COLUMNEXTRACTED'|'CONSTANT',
     *     Value: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
