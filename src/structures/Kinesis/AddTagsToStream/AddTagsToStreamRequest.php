<?php

namespace Sunaoka\Aws\Structures\Kinesis\AddTagsToStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property array<string, string> $Tags
 * @property string|null $StreamARN
 */
class AddTagsToStreamRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     Tags: array<string, string>,
     *     StreamARN?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
