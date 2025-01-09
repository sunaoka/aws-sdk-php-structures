<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Complete
 * @property int $TotalResources
 */
class ResourceCount extends Shape
{
    /**
     * @param array{
     *     Complete?: bool,
     *     TotalResources?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
