<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\SynchronizeGatewayTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayIdentifier
 * @property list<string> $targetIdList
 */
class SynchronizeGatewayTargetsRequest extends Request
{
    /**
     * @param array{
     *     gatewayIdentifier: string,
     *     targetIdList: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
