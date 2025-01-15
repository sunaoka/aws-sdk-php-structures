<?php

namespace Sunaoka\Aws\Structures\CloudSearchDomain\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $found
 * @property int|null $start
 * @property string|null $cursor
 * @property list<Hit>|null $hit
 */
class Hits extends Shape
{
    /**
     * @param array{
     *     found?: int|null,
     *     start?: int|null,
     *     cursor?: string|null,
     *     hit?: list<Hit>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
