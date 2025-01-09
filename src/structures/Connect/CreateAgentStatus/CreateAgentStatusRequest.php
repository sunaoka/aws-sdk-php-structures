<?php

namespace Sunaoka\Aws\Structures\Connect\CreateAgentStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Name
 * @property string $Description
 * @property 'ENABLED'|'DISABLED' $State
 * @property int $DisplayOrder
 * @property array<string, string> $Tags
 */
class CreateAgentStatusRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Name: string,
     *     Description?: string,
     *     State: 'ENABLED'|'DISABLED',
     *     DisplayOrder?: int,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
