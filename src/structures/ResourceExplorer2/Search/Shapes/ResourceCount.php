<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $TotalResources
 * @property bool|null $Complete
 */
class ResourceCount extends Shape
{
    /**
     * @param array{
     *     TotalResources?: int|null,
     *     Complete?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
