<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\UntagStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamARN
 * @property string|null $StreamName
 * @property list<string> $TagKeyList
 */
class UntagStreamRequest extends Request
{
    /**
     * @param array{
     *     StreamARN?: string|null,
     *     StreamName?: string|null,
     *     TagKeyList: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
