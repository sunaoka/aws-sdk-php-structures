<?php

namespace Sunaoka\Aws\Structures\RAM\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceShareArn
 * @property list<string> $tagKeys
 * @property string $resourceArn
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceShareArn?: string,
     *     tagKeys: list<string>,
     *     resourceArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
