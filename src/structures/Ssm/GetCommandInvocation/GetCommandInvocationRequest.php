<?php

namespace Sunaoka\Aws\Structures\Ssm\GetCommandInvocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CommandId
 * @property string $InstanceId
 * @property string|null $PluginName
 */
class GetCommandInvocationRequest extends Request
{
    /**
     * @param array{
     *     CommandId: string,
     *     InstanceId: string,
     *     PluginName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
