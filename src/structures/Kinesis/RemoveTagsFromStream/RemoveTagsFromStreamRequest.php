<?php

namespace Sunaoka\Aws\Structures\Kinesis\RemoveTagsFromStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property list<string> $TagKeys
 * @property string|null $StreamARN
 * @property string|null $StreamId
 */
class RemoveTagsFromStreamRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     TagKeys: list<string>,
     *     StreamARN?: string|null,
     *     StreamId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
