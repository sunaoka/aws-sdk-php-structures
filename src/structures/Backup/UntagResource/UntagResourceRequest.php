<?php

namespace Sunaoka\Aws\Structures\Backup\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property list<string> $TagKeyList
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     TagKeyList: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
