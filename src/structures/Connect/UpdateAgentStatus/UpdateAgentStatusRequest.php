<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateAgentStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $AgentStatusId
 * @property string $Name
 * @property string $Description
 * @property 'ENABLED'|'DISABLED' $State
 * @property int<1, 50> $DisplayOrder
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
     *     DisplayOrder?: int<1, 50>,
     *     ResetOrderNumber?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
