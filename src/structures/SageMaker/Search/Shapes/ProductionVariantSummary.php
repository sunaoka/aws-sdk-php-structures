<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VariantName
 * @property list<DeployedImage> $DeployedImages
 * @property float $CurrentWeight
 * @property float $DesiredWeight
 * @property int<0, max> $CurrentInstanceCount
 * @property int<0, max> $DesiredInstanceCount
 * @property list<ProductionVariantStatus> $VariantStatus
 * @property ProductionVariantServerlessConfig $CurrentServerlessConfig
 * @property ProductionVariantServerlessConfig $DesiredServerlessConfig
 * @property ProductionVariantManagedInstanceScaling $ManagedInstanceScaling
 * @property ProductionVariantRoutingConfig $RoutingConfig
 */
class ProductionVariantSummary extends Shape
{
    /**
     * @param array{
     *     VariantName: string,
     *     DeployedImages?: list<DeployedImage>,
     *     CurrentWeight?: float,
     *     DesiredWeight?: float,
     *     CurrentInstanceCount?: int<0, max>,
     *     DesiredInstanceCount?: int<0, max>,
     *     VariantStatus?: list<ProductionVariantStatus>,
     *     CurrentServerlessConfig?: ProductionVariantServerlessConfig,
     *     DesiredServerlessConfig?: ProductionVariantServerlessConfig,
     *     ManagedInstanceScaling?: ProductionVariantManagedInstanceScaling,
     *     RoutingConfig?: ProductionVariantRoutingConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
