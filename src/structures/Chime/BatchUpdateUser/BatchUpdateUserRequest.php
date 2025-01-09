<?php

namespace Sunaoka\Aws\Structures\Chime\BatchUpdateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property list<Shapes\UpdateUserRequestItem> $UpdateUserRequestItems
 */
class BatchUpdateUserRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     UpdateUserRequestItems: list<Shapes\UpdateUserRequestItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
