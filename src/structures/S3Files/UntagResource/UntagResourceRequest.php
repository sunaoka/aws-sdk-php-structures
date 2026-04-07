<?php

namespace Sunaoka\Aws\Structures\S3Files\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceId
 * @property list<string> $tagKeys
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceId: string,
     *     tagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
