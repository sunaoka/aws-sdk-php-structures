<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property 'ENABLED'|'DISABLED'|null $queryLogStatus
 * @property Shapes\MembershipProtectedQueryResultConfiguration|null $defaultResultConfiguration
 */
class UpdateMembershipRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     queryLogStatus?: 'ENABLED'|'DISABLED'|null,
     *     defaultResultConfiguration?: Shapes\MembershipProtectedQueryResultConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
