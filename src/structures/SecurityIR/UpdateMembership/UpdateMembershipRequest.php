<?php

namespace Sunaoka\Aws\Structures\SecurityIR\UpdateMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipId
 * @property string|null $membershipName
 * @property list<Shapes\IncidentResponder>|null $incidentResponseTeam
 * @property list<Shapes\OptInFeature>|null $optInFeatures
 * @property Shapes\MembershipAccountsConfigurationsUpdate|null $membershipAccountsConfigurationsUpdate
 * @property bool|null $undoMembershipCancellation
 */
class UpdateMembershipRequest extends Request
{
    /**
     * @param array{
     *     membershipId: string,
     *     membershipName?: string|null,
     *     incidentResponseTeam?: list<Shapes\IncidentResponder>|null,
     *     optInFeatures?: list<Shapes\OptInFeature>|null,
     *     membershipAccountsConfigurationsUpdate?: Shapes\MembershipAccountsConfigurationsUpdate|null,
     *     undoMembershipCancellation?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
