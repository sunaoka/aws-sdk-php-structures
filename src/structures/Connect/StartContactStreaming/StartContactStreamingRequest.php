<?php

namespace Sunaoka\Aws\Structures\Connect\StartContactStreaming;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property Shapes\ChatStreamingConfiguration $ChatStreamingConfiguration
 * @property string $ClientToken
 */
class StartContactStreamingRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     ChatStreamingConfiguration: Shapes\ChatStreamingConfiguration,
     *     ClientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
