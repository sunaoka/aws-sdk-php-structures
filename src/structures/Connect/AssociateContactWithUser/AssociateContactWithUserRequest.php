<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateContactWithUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property string $UserId
 */
class AssociateContactWithUserRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     UserId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
