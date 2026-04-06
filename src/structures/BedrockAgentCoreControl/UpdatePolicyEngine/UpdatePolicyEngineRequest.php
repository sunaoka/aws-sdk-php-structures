<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdatePolicyEngine;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyEngineId
 * @property Shapes\UpdatedDescription|null $description
 */
class UpdatePolicyEngineRequest extends Request
{
    /**
     * @param array{
     *     policyEngineId: string,
     *     description?: Shapes\UpdatedDescription|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
