<?php

namespace Sunaoka\Aws\Structures\SecurityIR\CreateMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $membershipName
 * @property list<Shapes\IncidentResponder> $incidentResponseTeam
 * @property list<Shapes\OptInFeature> $optInFeatures
 * @property array<string, string> $tags
 */
class CreateMembershipRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     membershipName: string,
     *     incidentResponseTeam: list<Shapes\IncidentResponder>,
     *     optInFeatures?: list<Shapes\OptInFeature>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
