<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property list<string> $TagKeyList
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     TagKeyList: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
