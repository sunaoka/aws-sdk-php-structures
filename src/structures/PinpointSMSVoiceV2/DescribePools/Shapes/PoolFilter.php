<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribePools\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'status'|'message-type'|'two-way-enabled'|'self-managed-opt-outs-enabled'|'opt-out-list-name'|'shared-routes-enabled'|'deletion-protection-enabled'|'two-way-channel-arn' $Name
 * @property list<string> $Values
 */
class PoolFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'status'|'message-type'|'two-way-enabled'|'self-managed-opt-outs-enabled'|'opt-out-list-name'|'shared-routes-enabled'|'deletion-protection-enabled'|'two-way-channel-arn',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
