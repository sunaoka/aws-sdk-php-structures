<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $agentSpaceId
 * @property string $membershipId
 * @property 'USER'|'GROUP' $memberType
 * @property Shapes\MembershipConfig|null $config
 */
class CreateMembershipRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     agentSpaceId: string,
     *     membershipId: string,
     *     memberType: 'USER'|'GROUP',
     *     config?: Shapes\MembershipConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
