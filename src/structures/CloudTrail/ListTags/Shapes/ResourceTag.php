<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceId
 * @property list<Tag>|null $TagsList
 */
class ResourceTag extends Shape
{
    /**
     * @param array{
     *     ResourceId?: string|null,
     *     TagsList?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
