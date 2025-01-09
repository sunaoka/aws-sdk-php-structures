<?php

namespace Sunaoka\Aws\Structures\Emr\RemoveTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property list<string> $TagKeys
 */
class RemoveTagsRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
