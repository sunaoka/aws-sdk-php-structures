<?php

namespace Sunaoka\Aws\Structures\Cloud9\DeleteEnvironmentMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $userArn
 */
class DeleteEnvironmentMembershipRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     userArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
