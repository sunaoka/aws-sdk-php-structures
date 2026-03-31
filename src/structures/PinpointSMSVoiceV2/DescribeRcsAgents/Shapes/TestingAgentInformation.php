<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRcsAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATED'|'PENDING'|'ACTIVE' $Status
 * @property string|null $TestingAgentId
 * @property string $RegistrationId
 */
class TestingAgentInformation extends Shape
{
    /**
     * @param array{
     *     Status: 'CREATED'|'PENDING'|'ACTIVE',
     *     TestingAgentId?: string|null,
     *     RegistrationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
