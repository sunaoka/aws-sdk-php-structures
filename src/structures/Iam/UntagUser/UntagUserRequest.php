<?php

namespace Sunaoka\Aws\Structures\Iam\UntagUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property list<string> $TagKeys
 */
class UntagUserRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
