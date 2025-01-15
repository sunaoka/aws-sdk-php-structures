<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateAgentStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $AgentStatusId
 * @property string|null $Name
 * @property string|null $Description
 * @property 'ENABLED'|'DISABLED'|null $State
 * @property int<1, 50>|null $DisplayOrder
 * @property bool|null $ResetOrderNumber
 */
class UpdateAgentStatusRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     AgentStatusId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     State?: 'ENABLED'|'DISABLED'|null,
     *     DisplayOrder?: int<1, 50>|null,
     *     ResetOrderNumber?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
