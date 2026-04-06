<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactFlowModuleContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactFlowModuleId
 * @property string|null $Content
 * @property string|null $Settings
 */
class UpdateContactFlowModuleContentRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactFlowModuleId: string,
     *     Content?: string|null,
     *     Settings?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
