<?php

namespace Sunaoka\Aws\Structures\RAM\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $resourceShareArn
 * @property list<string> $tagKeys
 * @property string|null $resourceArn
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceShareArn?: string|null,
     *     tagKeys: list<string>,
     *     resourceArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
