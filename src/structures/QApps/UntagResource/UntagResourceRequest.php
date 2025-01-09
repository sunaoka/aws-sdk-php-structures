<?php

namespace Sunaoka\Aws\Structures\QApps\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceARN
 * @property list<string> $tagKeys
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceARN: string,
     *     tagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
