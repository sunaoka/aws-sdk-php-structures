<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeReservedCapacity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UltraServerType
 * @property 'ml.p4d.24xlarge'|'ml.p5.48xlarge'|'ml.p5e.48xlarge'|'ml.p5en.48xlarge'|'ml.trn1.32xlarge'|'ml.trn2.48xlarge'|'ml.p6-b200.48xlarge'|'ml.p4de.24xlarge'|'ml.p6e-gb200.36xlarge'|'ml.p5.4xlarge' $InstanceType
 * @property int<1, max>|null $UltraServerCount
 * @property int<0, max>|null $AvailableSpareInstanceCount
 * @property int<0, max>|null $UnhealthyInstanceCount
 */
class UltraServerSummary extends Shape
{
    /**
     * @param array{
     *     UltraServerType: string,
     *     InstanceType: 'ml.p4d.24xlarge'|'ml.p5.48xlarge'|'ml.p5e.48xlarge'|'ml.p5en.48xlarge'|'ml.trn1.32xlarge'|'ml.trn2.48xlarge'|'ml.p6-b200.48xlarge'|'ml.p4de.24xlarge'|'ml.p6e-gb200.36xlarge'|'ml.p5.4xlarge',
     *     UltraServerCount?: int<1, max>|null,
     *     AvailableSpareInstanceCount?: int<0, max>|null,
     *     UnhealthyInstanceCount?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
