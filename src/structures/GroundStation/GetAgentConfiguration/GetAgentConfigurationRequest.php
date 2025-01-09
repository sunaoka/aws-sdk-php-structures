<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetAgentConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 */
class GetAgentConfigurationRequest extends Request
{
    /**
     * @param array{agentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
