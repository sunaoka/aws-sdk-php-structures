<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListServiceTopologyEdges\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTAINMENT'|'DATA_FLOW'|'OBSERVABILITY'|'PERMISSIONS'|null $topologyType
 * @property string|null $label
 */
class EdgePropertySummary extends Shape
{
    /**
     * @param array{
     *     topologyType?: 'CONTAINMENT'|'DATA_FLOW'|'OBSERVABILITY'|'PERMISSIONS'|null,
     *     label?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
