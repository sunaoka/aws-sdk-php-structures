<?php

namespace Sunaoka\Aws\Structures\Chime\BatchUnsuspendUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property list<string> $UserIdList
 */
class BatchUnsuspendUserRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     UserIdList: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
