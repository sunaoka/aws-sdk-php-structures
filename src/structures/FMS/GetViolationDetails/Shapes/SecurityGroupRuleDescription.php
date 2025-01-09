<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IPV4Range
 * @property string $IPV6Range
 * @property string $PrefixListId
 * @property string $Protocol
 * @property int $FromPort
 * @property int $ToPort
 */
class SecurityGroupRuleDescription extends Shape
{
    /**
     * @param array{
     *     IPV4Range?: string,
     *     IPV6Range?: string,
     *     PrefixListId?: string,
     *     Protocol?: string,
     *     FromPort?: int,
     *     ToPort?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
