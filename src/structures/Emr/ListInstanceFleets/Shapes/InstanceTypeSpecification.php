<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceType
 * @property int<0, max>|null $WeightedCapacity
 * @property string|null $BidPrice
 * @property double|null $BidPriceAsPercentageOfOnDemandPrice
 * @property list<Configuration>|null $Configurations
 * @property list<EbsBlockDevice>|null $EbsBlockDevices
 * @property bool|null $EbsOptimized
 * @property string|null $CustomAmiId
 * @property double|null $Priority
 */
class InstanceTypeSpecification extends Shape
{
    /**
     * @param array{
     *     InstanceType?: string|null,
     *     WeightedCapacity?: int<0, max>|null,
     *     BidPrice?: string|null,
     *     BidPriceAsPercentageOfOnDemandPrice?: double|null,
     *     Configurations?: list<Configuration>|null,
     *     EbsBlockDevices?: list<EbsBlockDevice>|null,
     *     EbsOptimized?: bool|null,
     *     CustomAmiId?: string|null,
     *     Priority?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
