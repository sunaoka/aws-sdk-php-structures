<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\GetResourceExplorerSetup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCEEDED'|'FAILED'|'IN_PROGRESS'|'SKIPPED'|null $Status
 * @property Index|null $Index
 * @property ErrorDetails|null $ErrorDetails
 */
class IndexStatus extends Shape
{
    /**
     * @param array{
     *     Status?: 'SUCCEEDED'|'FAILED'|'IN_PROGRESS'|'SKIPPED'|null,
     *     Index?: Index|null,
     *     ErrorDetails?: ErrorDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
