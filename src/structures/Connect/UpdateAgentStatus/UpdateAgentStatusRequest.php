<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateAgentStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $AgentStatusId
 * @property string $Name
 * @property string $Description
 * @property 'ENABLED'|'DISABLED' $State
 * @property int $DisplayOrder
 * @property bool $ResetOrderNumber
 */
class UpdateAgentStatusRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     AgentStatusId: string,
     *     Name?: string,
     *     Description?: string,
     *     State?: 'ENABLED'|'DISABLED',
     *     DisplayOrder?: int,
     *     ResetOrderNumber?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
