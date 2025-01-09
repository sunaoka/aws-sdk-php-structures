<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\UntagStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamARN
 * @property string $StreamName
 * @property list<string> $TagKeyList
 */
class UntagStreamRequest extends Request
{
    /**
     * @param array{
     *     StreamARN?: string,
     *     StreamName?: string,
     *     TagKeyList: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
