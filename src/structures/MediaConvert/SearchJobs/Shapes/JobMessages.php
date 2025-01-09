<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Info
 * @property list<string> $Warning
 */
class JobMessages extends Shape
{
    /**
     * @param array{
     *     Info?: list<string>,
     *     Warning?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
