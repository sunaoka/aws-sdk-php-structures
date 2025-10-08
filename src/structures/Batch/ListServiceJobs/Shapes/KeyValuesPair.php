<?php

namespace Sunaoka\Aws\Structures\Batch\ListServiceJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property list<string>|null $values
 */
class KeyValuesPair extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
