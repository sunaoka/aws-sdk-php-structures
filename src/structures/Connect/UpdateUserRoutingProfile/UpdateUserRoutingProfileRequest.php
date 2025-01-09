<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateUserRoutingProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoutingProfileId
 * @property string $UserId
 * @property string $InstanceId
 */
class UpdateUserRoutingProfileRequest extends Request
{
    /**
     * @param array{
     *     RoutingProfileId: string,
     *     UserId: string,
     *     InstanceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
