<?php

namespace Sunaoka\Aws\Structures\DAX\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceName
 * @property list<string> $TagKeys
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceName: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
