<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallPolicyV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $RuleEnabled
 * @property string|null $RuleDescription
 */
class RuleMetadata extends Shape
{
    /**
     * @param array{
     *     RuleEnabled?: bool|null,
     *     RuleDescription?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
