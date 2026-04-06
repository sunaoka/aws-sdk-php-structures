<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceId
 * @property 'vpc'|null $ResourceType
 * @property string|null $ResourceRegion
 * @property string|null $ResourceOwner
 */
class IpamPoolSourceResource extends Shape
{
    /**
     * @param array{
     *     ResourceId?: string|null,
     *     ResourceType?: 'vpc'|null,
     *     ResourceRegion?: string|null,
     *     ResourceOwner?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
