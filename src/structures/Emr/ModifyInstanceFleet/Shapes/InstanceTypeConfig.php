<?php

namespace Sunaoka\Aws\Structures\Emr\ModifyInstanceFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceType
 * @property int<0, max>|null $WeightedCapacity
 * @property string|null $BidPrice
 * @property double|null $BidPriceAsPercentageOfOnDemandPrice
 * @property EbsConfiguration|null $EbsConfiguration
 * @property list<Configuration>|null $Configurations
 * @property string|null $CustomAmiId
 * @property double|null $Priority
 */
class InstanceTypeConfig extends Shape
{
    /**
     * @param array{
     *     InstanceType: string,
     *     WeightedCapacity?: int<0, max>|null,
     *     BidPrice?: string|null,
     *     BidPriceAsPercentageOfOnDemandPrice?: double|null,
     *     EbsConfiguration?: EbsConfiguration|null,
     *     Configurations?: list<Configuration>|null,
     *     CustomAmiId?: string|null,
     *     Priority?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
