<?php

namespace Sunaoka\Aws\Structures\PersonalizeEvents\PutUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetArn
 * @property list<Shapes\User> $users
 */
class PutUsersRequest extends Request
{
    /**
     * @param array{
     *     datasetArn: string,
     *     users: list<Shapes\User>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
