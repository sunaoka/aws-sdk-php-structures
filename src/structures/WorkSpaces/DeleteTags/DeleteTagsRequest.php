<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DeleteTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property list<string> $TagKeys
 */
class DeleteTagsRequest extends Request
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
