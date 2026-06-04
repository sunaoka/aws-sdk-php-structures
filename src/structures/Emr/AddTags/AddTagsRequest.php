<?php

namespace Sunaoka\Aws\Structures\Emr\AddTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property list<Shapes\Tag> $Tags
 * @property string|null $ClusterId
 */
class AddTagsRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     Tags: list<Shapes\Tag>,
     *     ClusterId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
