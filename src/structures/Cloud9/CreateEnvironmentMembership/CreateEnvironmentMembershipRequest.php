<?php

namespace Sunaoka\Aws\Structures\Cloud9\CreateEnvironmentMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $userArn
 * @property 'read-write'|'read-only' $permissions
 */
class CreateEnvironmentMembershipRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     userArn: string,
     *     permissions: 'read-write'|'read-only'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
