<?php

namespace Sunaoka\Aws\Structures\EKS\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property list<string> $tagKeys
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     tagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
