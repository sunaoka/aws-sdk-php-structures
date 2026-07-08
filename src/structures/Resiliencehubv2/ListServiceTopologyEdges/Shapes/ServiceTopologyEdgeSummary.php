<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListServiceTopologyEdges\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceResourceIdentifier
 * @property string $destinationResourceIdentifier
 * @property string|null $sourceRegion
 * @property string|null $destinationRegion
 * @property string|null $sourceAccount
 * @property string|null $destinationAccount
 * @property list<EdgePropertySummary>|null $properties
 */
class ServiceTopologyEdgeSummary extends Shape
{
    /**
     * @param array{
     *     sourceResourceIdentifier: string,
     *     destinationResourceIdentifier: string,
     *     sourceRegion?: string|null,
     *     destinationRegion?: string|null,
     *     sourceAccount?: string|null,
     *     destinationAccount?: string|null,
     *     properties?: list<EdgePropertySummary>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
