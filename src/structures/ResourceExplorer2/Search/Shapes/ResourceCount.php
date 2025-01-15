<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Complete
 * @property int|null $TotalResources
 */
class ResourceCount extends Shape
{
    /**
     * @param array{
     *     Complete?: bool|null,
     *     TotalResources?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
