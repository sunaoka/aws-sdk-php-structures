<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetAgentSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property 'METADATA_ONLY'|'ALL_DATA'|null $includedData
 */
class GetAgentSpaceRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     includedData?: 'METADATA_ONLY'|'ALL_DATA'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
