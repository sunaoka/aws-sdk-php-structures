<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateHarnessEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $harnessId
 * @property string $endpointName
 * @property string|null $targetVersion
 * @property string|null $description
 * @property string|null $clientToken
 */
class UpdateHarnessEndpointRequest extends Request
{
    /**
     * @param array{
     *     harnessId: string,
     *     endpointName: string,
     *     targetVersion?: string|null,
     *     description?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
