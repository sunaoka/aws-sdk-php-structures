<?php

namespace Sunaoka\Aws\Structures\Waf\ListTagsForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceARN
 * @property list<Tag>|null $TagList
 */
class TagInfoForResource extends Shape
{
    /**
     * @param array{
     *     ResourceARN?: string|null,
     *     TagList?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
