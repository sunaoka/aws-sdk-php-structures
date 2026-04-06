<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Info
 * @property list<string>|null $Warning
 */
class JobMessages extends Shape
{
    /**
     * @param array{
     *     Info?: list<string>|null,
     *     Warning?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
