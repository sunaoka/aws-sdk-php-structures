<?php

namespace Sunaoka\Aws\Structures\Kinesis\AddTagsToStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property array<string, string> $Tags
 * @property string $StreamARN
 */
class AddTagsToStreamRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     Tags: array<string, string>,
     *     StreamARN?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
