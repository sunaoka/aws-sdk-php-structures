<?php

namespace Sunaoka\Aws\Structures\Ssm\GetCommandInvocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CommandId
 * @property string $InstanceId
 * @property string $PluginName
 */
class GetCommandInvocationRequest extends Request
{
    /**
     * @param array{
     *     CommandId: string,
     *     InstanceId: string,
     *     PluginName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
