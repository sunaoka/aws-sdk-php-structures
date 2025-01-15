<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ActivationKey
 * @property string|null $AgentName
 * @property list<Shapes\TagListEntry>|null $Tags
 * @property string|null $VpcEndpointId
 * @property list<string>|null $SubnetArns
 * @property list<string>|null $SecurityGroupArns
 */
class CreateAgentRequest extends Request
{
    /**
     * @param array{
     *     ActivationKey: string,
     *     AgentName?: string|null,
     *     Tags?: list<Shapes\TagListEntry>|null,
     *     VpcEndpointId?: string|null,
     *     SubnetArns?: list<string>|null,
     *     SecurityGroupArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
