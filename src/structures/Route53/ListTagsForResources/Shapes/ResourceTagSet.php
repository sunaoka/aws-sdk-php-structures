<?php

namespace Sunaoka\Aws\Structures\Route53\ListTagsForResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'healthcheck'|'hostedzone'|'healthchecksource'|null $ResourceType
 * @property string|null $ResourceId
 * @property list<Tag>|null $Tags
 */
class ResourceTagSet extends Shape
{
    /**
     * @param array{
     *     ResourceType?: 'healthcheck'|'hostedzone'|'healthchecksource'|null,
     *     ResourceId?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
