<?php

namespace Sunaoka\Aws\Structures\Emr\AddInstanceFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceType
 * @property int $WeightedCapacity
 * @property string $BidPrice
 * @property double $BidPriceAsPercentageOfOnDemandPrice
 * @property EbsConfiguration $EbsConfiguration
 * @property list<Configuration> $Configurations
 * @property string $CustomAmiId
 * @property double $Priority
 */
class InstanceTypeConfig extends Shape
{
    /**
     * @param array{
     *     InstanceType: string,
     *     WeightedCapacity?: int,
     *     BidPrice?: string,
     *     BidPriceAsPercentageOfOnDemandPrice?: double,
     *     EbsConfiguration?: EbsConfiguration,
     *     Configurations?: list<Configuration>,
     *     CustomAmiId?: string,
     *     Priority?: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
