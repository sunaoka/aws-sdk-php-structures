<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListIngestionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STATUS' $attribute
 * @property 'EQ' $operator
 * @property list<string> $values
 */
class IngestionJobFilter extends Shape
{
    /**
     * @param array{
     *     attribute: 'STATUS',
     *     operator: 'EQ',
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
