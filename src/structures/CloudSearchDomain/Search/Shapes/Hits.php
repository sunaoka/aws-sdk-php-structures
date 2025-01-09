<?php

namespace Sunaoka\Aws\Structures\CloudSearchDomain\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $found
 * @property int $start
 * @property string $cursor
 * @property list<Hit> $hit
 */
class Hits extends Shape
{
    /**
     * @param array{
     *     found?: int,
     *     start?: int,
     *     cursor?: string,
     *     hit?: list<Hit>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
