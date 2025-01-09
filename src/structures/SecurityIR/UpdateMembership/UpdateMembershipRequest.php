<?php

namespace Sunaoka\Aws\Structures\SecurityIR\UpdateMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipId
 * @property string $membershipName
 * @property list<Shapes\IncidentResponder> $incidentResponseTeam
 * @property list<Shapes\OptInFeature> $optInFeatures
 */
class UpdateMembershipRequest extends Request
{
    /**
     * @param array{
     *     membershipId: string,
     *     membershipName?: string,
     *     incidentResponseTeam?: list<Shapes\IncidentResponder>,
     *     optInFeatures?: list<Shapes\OptInFeature>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
