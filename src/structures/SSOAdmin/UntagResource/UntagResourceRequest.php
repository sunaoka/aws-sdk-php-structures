<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $InstanceArn
 * @property string $ResourceArn
 * @property list<string> $TagKeys
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn?: string|null,
     *     ResourceArn: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
