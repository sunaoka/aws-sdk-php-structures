<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListServiceTopologyEdges\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceResourceIdentifier
 * @property string $destinationResourceIdentifier
 * @property list<EdgePropertySummary>|null $properties
 */
class ServiceTopologyEdgeSummary extends Shape
{
    /**
     * @param array{
     *     sourceResourceIdentifier: string,
     *     destinationResourceIdentifier: string,
     *     properties?: list<EdgePropertySummary>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
