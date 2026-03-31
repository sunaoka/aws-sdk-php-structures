<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListWebhooks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $associationId
 */
class ListWebhooksRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     associationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
