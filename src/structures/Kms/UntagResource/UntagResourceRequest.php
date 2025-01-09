<?php

namespace Sunaoka\Aws\Structures\Kms\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property list<string> $TagKeys
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
