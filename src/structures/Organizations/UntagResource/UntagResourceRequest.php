<?php

namespace Sunaoka\Aws\Structures\Organizations\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property list<string> $TagKeys
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
