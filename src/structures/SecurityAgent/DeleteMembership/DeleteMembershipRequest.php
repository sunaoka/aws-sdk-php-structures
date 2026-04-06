<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\DeleteMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $agentSpaceId
 * @property string $membershipId
 * @property 'USER'|null $memberType
 */
class DeleteMembershipRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     agentSpaceId: string,
     *     membershipId: string,
     *     memberType?: 'USER'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
