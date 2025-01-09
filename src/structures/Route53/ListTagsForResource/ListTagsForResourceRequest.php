<?php

namespace Sunaoka\Aws\Structures\Route53\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'healthcheck'|'hostedzone' $ResourceType
 * @property string $ResourceId
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceType: 'healthcheck'|'hostedzone',
     *     ResourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
