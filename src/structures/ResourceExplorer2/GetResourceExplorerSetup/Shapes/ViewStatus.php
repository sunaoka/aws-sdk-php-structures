<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\GetResourceExplorerSetup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCEEDED'|'FAILED'|'IN_PROGRESS'|'SKIPPED'|null $Status
 * @property View|null $View
 * @property ErrorDetails|null $ErrorDetails
 */
class ViewStatus extends Shape
{
    /**
     * @param array{
     *     Status?: 'SUCCEEDED'|'FAILED'|'IN_PROGRESS'|'SKIPPED'|null,
     *     View?: View|null,
     *     ErrorDetails?: ErrorDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
