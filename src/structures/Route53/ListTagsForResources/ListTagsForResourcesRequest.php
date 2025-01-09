<?php

namespace Sunaoka\Aws\Structures\Route53\ListTagsForResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'healthcheck'|'hostedzone' $ResourceType
 * @property list<string> $ResourceIds
 */
class ListTagsForResourcesRequest extends Request
{
    /**
     * @param array{
     *     ResourceType: 'healthcheck'|'hostedzone',
     *     ResourceIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
