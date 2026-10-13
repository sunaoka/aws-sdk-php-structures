<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resource
 * @property list<string> $tagKeys
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     resource: string,
     *     tagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
