<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteContactFlowVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactFlowId
 * @property int<1, max> $ContactFlowVersion
 */
class DeleteContactFlowVersionRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactFlowId: string,
     *     ContactFlowVersion: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
