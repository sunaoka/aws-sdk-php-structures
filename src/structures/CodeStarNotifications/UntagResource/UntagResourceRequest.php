<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property list<string> $TagKeys
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
