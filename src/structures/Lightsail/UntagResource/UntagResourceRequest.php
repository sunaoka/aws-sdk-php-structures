<?php

namespace Sunaoka\Aws\Structures\Lightsail\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceName
 * @property string $resourceArn
 * @property list<string> $tagKeys
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceName: string,
     *     resourceArn?: string,
     *     tagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
