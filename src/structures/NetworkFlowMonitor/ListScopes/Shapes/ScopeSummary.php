<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\ListScopes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scopeId
 * @property 'SUCCEEDED'|'IN_PROGRESS'|'FAILED'|'DEACTIVATING'|'DEACTIVATED' $status
 * @property string $scopeArn
 */
class ScopeSummary extends Shape
{
    /**
     * @param array{
     *     scopeId: string,
     *     status: 'SUCCEEDED'|'IN_PROGRESS'|'FAILED'|'DEACTIVATING'|'DEACTIVATED',
     *     scopeArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
