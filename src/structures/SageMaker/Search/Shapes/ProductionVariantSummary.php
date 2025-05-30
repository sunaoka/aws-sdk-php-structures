<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VariantName
 * @property list<DeployedImage>|null $DeployedImages
 * @property float|null $CurrentWeight
 * @property float|null $DesiredWeight
 * @property int<0, max>|null $CurrentInstanceCount
 * @property int<0, max>|null $DesiredInstanceCount
 * @property list<ProductionVariantStatus>|null $VariantStatus
 * @property ProductionVariantServerlessConfig|null $CurrentServerlessConfig
 * @property ProductionVariantServerlessConfig|null $DesiredServerlessConfig
 * @property ProductionVariantManagedInstanceScaling|null $ManagedInstanceScaling
 * @property ProductionVariantRoutingConfig|null $RoutingConfig
 * @property ProductionVariantCapacityReservationSummary|null $CapacityReservationConfig
 */
class ProductionVariantSummary extends Shape
{
    /**
     * @param array{
     *     VariantName: string,
     *     DeployedImages?: list<DeployedImage>|null,
     *     CurrentWeight?: float|null,
     *     DesiredWeight?: float|null,
     *     CurrentInstanceCount?: int<0, max>|null,
     *     DesiredInstanceCount?: int<0, max>|null,
     *     VariantStatus?: list<ProductionVariantStatus>|null,
     *     CurrentServerlessConfig?: ProductionVariantServerlessConfig|null,
     *     DesiredServerlessConfig?: ProductionVariantServerlessConfig|null,
     *     ManagedInstanceScaling?: ProductionVariantManagedInstanceScaling|null,
     *     RoutingConfig?: ProductionVariantRoutingConfig|null,
     *     CapacityReservationConfig?: ProductionVariantCapacityReservationSummary|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
