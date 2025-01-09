<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceId
 * @property list<Tag> $TagsList
 */
class ResourceTag extends Shape
{
    /**
     * @param array{
     *     ResourceId?: string,
     *     TagsList?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
