<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetOperatorApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 */
class GetOperatorAppRequest extends Request
{
    /**
     * @param array{agentSpaceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
