<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IPV4Range
 * @property string|null $IPV6Range
 * @property string|null $PrefixListId
 * @property string|null $Protocol
 * @property int<0, 65535>|null $FromPort
 * @property int<0, 65535>|null $ToPort
 */
class SecurityGroupRuleDescription extends Shape
{
    /**
     * @param array{
     *     IPV4Range?: string|null,
     *     IPV6Range?: string|null,
     *     PrefixListId?: string|null,
     *     Protocol?: string|null,
     *     FromPort?: int<0, 65535>|null,
     *     ToPort?: int<0, 65535>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
