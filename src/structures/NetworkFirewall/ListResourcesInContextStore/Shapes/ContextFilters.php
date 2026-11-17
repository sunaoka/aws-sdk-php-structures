<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListResourcesInContextStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Region
 * @property 'SecurityGroup'|'VPC'|'Subnet'|'TGWAttachment'|null $ResourceType
 */
class ContextFilters extends Shape
{
    /**
     * @param array{
     *     Region?: string|null,
     *     ResourceType?: 'SecurityGroup'|'VPC'|'Subnet'|'TGWAttachment'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
