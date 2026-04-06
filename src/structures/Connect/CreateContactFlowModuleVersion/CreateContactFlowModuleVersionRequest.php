<?php

namespace Sunaoka\Aws\Structures\Connect\CreateContactFlowModuleVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $Description
 * @property string $ContactFlowModuleId
 * @property string|null $FlowModuleContentSha256
 */
class CreateContactFlowModuleVersionRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Description?: string|null,
     *     ContactFlowModuleId: string,
     *     FlowModuleContentSha256?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
