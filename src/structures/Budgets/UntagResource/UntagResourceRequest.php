<?php

namespace Sunaoka\Aws\Structures\Budgets\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceARN
 * @property list<string> $ResourceTagKeys
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceARN: string,
     *     ResourceTagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
