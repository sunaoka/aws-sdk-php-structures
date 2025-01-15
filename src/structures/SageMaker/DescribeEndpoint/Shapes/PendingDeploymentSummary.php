<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointConfigName
 * @property list<PendingProductionVariantSummary>|null $ProductionVariants
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property list<PendingProductionVariantSummary>|null $ShadowProductionVariants
 */
class PendingDeploymentSummary extends Shape
{
    /**
     * @param array{
     *     EndpointConfigName: string,
     *     ProductionVariants?: list<PendingProductionVariantSummary>|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     ShadowProductionVariants?: list<PendingProductionVariantSummary>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
