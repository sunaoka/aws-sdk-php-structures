<?php

namespace Sunaoka\Aws\Structures\Route53\ListTagsForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'healthcheck'|'hostedzone'|null $ResourceType
 * @property string|null $ResourceId
 * @property list<Tag>|null $Tags
 */
class ResourceTagSet extends Shape
{
    /**
     * @param array{
     *     ResourceType?: 'healthcheck'|'hostedzone'|null,
     *     ResourceId?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
