<?php

namespace Sunaoka\Aws\Structures\CloudTrail\RemoveTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property list<Shapes\Tag> $TagsList
 */
class RemoveTagsRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     TagsList: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
