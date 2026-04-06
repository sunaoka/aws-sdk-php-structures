<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListUltraServersByReservedCapacity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UltraServerId
 * @property string $UltraServerType
 * @property string $AvailabilityZone
 * @property 'ml.p4d.24xlarge'|'ml.p5.48xlarge'|'ml.p5e.48xlarge'|'ml.p5en.48xlarge'|'ml.trn1.32xlarge'|'ml.trn2.48xlarge'|'ml.p6-b200.48xlarge'|'ml.p4de.24xlarge'|'ml.p6e-gb200.36xlarge'|'ml.p5.4xlarge'|'ml.p6-b300.48xlarge' $InstanceType
 * @property int<0, max> $TotalInstanceCount
 * @property int<0, max>|null $ConfiguredSpareInstanceCount
 * @property int<0, max>|null $AvailableInstanceCount
 * @property int<0, max>|null $InUseInstanceCount
 * @property int<0, max>|null $AvailableSpareInstanceCount
 * @property int<0, max>|null $UnhealthyInstanceCount
 * @property 'OK'|'Impaired'|'Insufficient-Data'|null $HealthStatus
 */
class UltraServer extends Shape
{
    /**
     * @param array{
     *     UltraServerId: string,
     *     UltraServerType: string,
     *     AvailabilityZone: string,
     *     InstanceType: 'ml.p4d.24xlarge'|'ml.p5.48xlarge'|'ml.p5e.48xlarge'|'ml.p5en.48xlarge'|'ml.trn1.32xlarge'|'ml.trn2.48xlarge'|'ml.p6-b200.48xlarge'|'ml.p4de.24xlarge'|'ml.p6e-gb200.36xlarge'|'ml.p5.4xlarge'|'ml.p6-b300.48xlarge',
     *     TotalInstanceCount: int<0, max>,
     *     ConfiguredSpareInstanceCount?: int<0, max>|null,
     *     AvailableInstanceCount?: int<0, max>|null,
     *     InUseInstanceCount?: int<0, max>|null,
     *     AvailableSpareInstanceCount?: int<0, max>|null,
     *     UnhealthyInstanceCount?: int<0, max>|null,
     *     HealthStatus?: 'OK'|'Impaired'|'Insufficient-Data'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
