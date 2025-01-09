<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property 'ENABLED'|'DISABLED' $queryLogStatus
 * @property Shapes\MembershipProtectedQueryResultConfiguration $defaultResultConfiguration
 */
class UpdateMembershipRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     queryLogStatus?: 'ENABLED'|'DISABLED',
     *     defaultResultConfiguration?: Shapes\MembershipProtectedQueryResultConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
