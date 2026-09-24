<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListFulfillmentOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $volumeTypes
 * @property int<0, max>|null $iops
 */
class AmazonMachineImageEbsVolume extends Shape
{
    /**
     * @param array{
     *     volumeTypes: list<string>,
     *     iops?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
