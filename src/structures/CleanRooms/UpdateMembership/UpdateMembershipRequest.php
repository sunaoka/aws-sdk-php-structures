<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property 'ENABLED'|'DISABLED'|null $queryLogStatus
 * @property 'ENABLED'|'DISABLED'|null $jobLogStatus
 * @property Shapes\MembershipProtectedQueryResultConfiguration|null $defaultResultConfiguration
 * @property Shapes\MembershipProtectedJobResultConfiguration|null $defaultJobResultConfiguration
 */
class UpdateMembershipRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     queryLogStatus?: 'ENABLED'|'DISABLED'|null,
     *     jobLogStatus?: 'ENABLED'|'DISABLED'|null,
     *     defaultResultConfiguration?: Shapes\MembershipProtectedQueryResultConfiguration|null,
     *     defaultJobResultConfiguration?: Shapes\MembershipProtectedJobResultConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
