<?php

namespace Sunaoka\Aws\Structures\Connect\UntagContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactId
 * @property string $InstanceId
 * @property list<string> $TagKeys
 */
class UntagContactRequest extends Request
{
    /**
     * @param array{
     *     ContactId: string,
     *     InstanceId: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
