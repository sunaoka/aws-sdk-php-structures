<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateHarnessEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $harnessId
 * @property string $endpointName
 * @property string|null $targetVersion
 * @property string|null $description
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateHarnessEndpointRequest extends Request
{
    /**
     * @param array{
     *     harnessId: string,
     *     endpointName: string,
     *     targetVersion?: string|null,
     *     description?: string|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
