<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ActivationKey
 * @property string $AgentName
 * @property list<Shapes\TagListEntry> $Tags
 * @property string $VpcEndpointId
 * @property list<string> $SubnetArns
 * @property list<string> $SecurityGroupArns
 */
class CreateAgentRequest extends Request
{
    /**
     * @param array{
     *     ActivationKey: string,
     *     AgentName?: string,
     *     Tags?: list<Shapes\TagListEntry>,
     *     VpcEndpointId?: string,
     *     SubnetArns?: list<string>,
     *     SecurityGroupArns?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
