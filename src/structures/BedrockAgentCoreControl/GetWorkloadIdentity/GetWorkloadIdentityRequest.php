<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetWorkloadIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class GetWorkloadIdentityRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
