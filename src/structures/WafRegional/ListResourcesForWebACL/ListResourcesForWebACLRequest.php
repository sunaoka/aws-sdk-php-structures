<?php

namespace Sunaoka\Aws\Structures\WafRegional\ListResourcesForWebACL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WebACLId
 * @property 'APPLICATION_LOAD_BALANCER'|'API_GATEWAY'|null $ResourceType
 */
class ListResourcesForWebACLRequest extends Request
{
    /**
     * @param array{
     *     WebACLId: string,
     *     ResourceType?: 'APPLICATION_LOAD_BALANCER'|'API_GATEWAY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
