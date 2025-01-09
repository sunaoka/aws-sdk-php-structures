<?php

namespace Sunaoka\Aws\Structures\Billing\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property list<string> $resourceTagKeys
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     resourceTagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
