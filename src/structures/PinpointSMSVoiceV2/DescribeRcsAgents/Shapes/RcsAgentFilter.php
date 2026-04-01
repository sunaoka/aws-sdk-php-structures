<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRcsAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'status'|'two-way-enabled'|'self-managed-opt-outs-enabled'|'opt-out-list-name'|'deletion-protection-enabled'|'two-way-channel-arn' $Name
 * @property list<string> $Values
 */
class RcsAgentFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'status'|'two-way-enabled'|'self-managed-opt-outs-enabled'|'opt-out-list-name'|'deletion-protection-enabled'|'two-way-channel-arn',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
