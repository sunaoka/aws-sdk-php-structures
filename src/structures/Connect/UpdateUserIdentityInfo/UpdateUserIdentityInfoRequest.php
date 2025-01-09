<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateUserIdentityInfo;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\UserIdentityInfo $IdentityInfo
 * @property string $UserId
 * @property string $InstanceId
 */
class UpdateUserIdentityInfoRequest extends Request
{
    /**
     * @param array{
     *     IdentityInfo: Shapes\UserIdentityInfo,
     *     UserId: string,
     *     InstanceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
