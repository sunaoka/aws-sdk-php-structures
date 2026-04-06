<?php

namespace Sunaoka\Aws\Structures\NotificationsContacts\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property list<string> $tagKeys
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     tagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
