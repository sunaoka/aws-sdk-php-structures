<?php

namespace Sunaoka\Aws\Structures\Emr\RemoveTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property list<string> $TagKeys
 * @property string|null $ClusterId
 */
class RemoveTagsRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     TagKeys: list<string>,
     *     ClusterId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
