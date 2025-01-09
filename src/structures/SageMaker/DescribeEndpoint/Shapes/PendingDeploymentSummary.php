<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointConfigName
 * @property list<PendingProductionVariantSummary> $ProductionVariants
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property list<PendingProductionVariantSummary> $ShadowProductionVariants
 */
class PendingDeploymentSummary extends Shape
{
    /**
     * @param array{
     *     EndpointConfigName: string,
     *     ProductionVariants?: list<PendingProductionVariantSummary>,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     ShadowProductionVariants?: list<PendingProductionVariantSummary>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
