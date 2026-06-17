<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteHarnessEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $harnessId
 * @property string $endpointName
 * @property string|null $clientToken
 */
class DeleteHarnessEndpointRequest extends Request
{
    /**
     * @param array{
     *     harnessId: string,
     *     endpointName: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
