<?php

namespace Sunaoka\Aws\Structures\Route53\ListTagsForResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'healthcheck'|'hostedzone' $ResourceType
 * @property string $ResourceId
 * @property list<Tag> $Tags
 */
class ResourceTagSet extends Shape
{
    /**
     * @param array{
     *     ResourceType?: 'healthcheck'|'hostedzone',
     *     ResourceId?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
