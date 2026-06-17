<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetHarnessEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $harnessId
 * @property string $endpointName
 */
class GetHarnessEndpointRequest extends Request
{
    /**
     * @param array{
     *     harnessId: string,
     *     endpointName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
