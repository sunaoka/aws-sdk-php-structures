<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteContactFlowModuleVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactFlowModuleId
 * @property int<1, max> $ContactFlowModuleVersion
 */
class DeleteContactFlowModuleVersionRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactFlowModuleId: string,
     *     ContactFlowModuleVersion: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
