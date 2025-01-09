<?php

namespace Sunaoka\Aws\Structures\Kinesis\RemoveTagsFromStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property list<string> $TagKeys
 * @property string $StreamARN
 */
class RemoveTagsFromStreamRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     TagKeys: list<string>,
     *     StreamARN?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
