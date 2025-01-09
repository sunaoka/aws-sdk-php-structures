<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceType
 * @property int<0, max> $WeightedCapacity
 * @property string $BidPrice
 * @property double $BidPriceAsPercentageOfOnDemandPrice
 * @property list<Configuration> $Configurations
 * @property list<EbsBlockDevice> $EbsBlockDevices
 * @property bool $EbsOptimized
 * @property string $CustomAmiId
 * @property double $Priority
 */
class InstanceTypeSpecification extends Shape
{
    /**
     * @param array{
     *     InstanceType?: string,
     *     WeightedCapacity?: int<0, max>,
     *     BidPrice?: string,
     *     BidPriceAsPercentageOfOnDemandPrice?: double,
     *     Configurations?: list<Configuration>,
     *     EbsBlockDevices?: list<EbsBlockDevice>,
     *     EbsOptimized?: bool,
     *     CustomAmiId?: string,
     *     Priority?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
