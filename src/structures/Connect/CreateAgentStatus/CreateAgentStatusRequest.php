<?php

namespace Sunaoka\Aws\Structures\Connect\CreateAgentStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Name
 * @property string|null $Description
 * @property 'ENABLED'|'DISABLED' $State
 * @property int<1, 50>|null $DisplayOrder
 * @property array<string, string>|null $Tags
 */
class CreateAgentStatusRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Name: string,
     *     Description?: string|null,
     *     State: 'ENABLED'|'DISABLED',
     *     DisplayOrder?: int<1, 50>|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
