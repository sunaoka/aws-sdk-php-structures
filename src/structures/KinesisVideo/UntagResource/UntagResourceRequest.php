<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceARN
 * @property list<string> $TagKeyList
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceARN: string,
     *     TagKeyList: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
