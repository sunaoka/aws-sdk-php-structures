<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ListLoaderJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $loadIds
 */
class LoaderIdResult extends Shape
{
    /**
     * @param array{loadIds?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
