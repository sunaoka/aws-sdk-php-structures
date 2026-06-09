<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFlowLogs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'network-interface'|'instance'|'auto-scaling-group'|null $ResourceType
 * @property list<string>|null $TagKeys
 */
class TagFieldSpecificationRequest extends Shape
{
    /**
     * @param array{
     *     ResourceType?: 'network-interface'|'instance'|'auto-scaling-group'|null,
     *     TagKeys?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
