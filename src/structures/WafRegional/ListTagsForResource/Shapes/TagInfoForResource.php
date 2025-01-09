<?php

namespace Sunaoka\Aws\Structures\WafRegional\ListTagsForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceARN
 * @property list<Tag> $TagList
 */
class TagInfoForResource extends Shape
{
    /**
     * @param array{
     *     ResourceARN?: string,
     *     TagList?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
