<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceARN
 * @property list<string> $TagKeys
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceARN: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
