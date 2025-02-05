<?php

namespace Sunaoka\Aws\Structures\ElasticInference\DescribeAcceleratorOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'region'|'availability-zone'|'availability-zone-id' $locationType
 * @property list<string>|null $acceleratorTypes
 */
class DescribeAcceleratorOfferingsRequest extends Request
{
    /**
     * @param array{
     *     locationType: 'region'|'availability-zone'|'availability-zone-id',
     *     acceleratorTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
