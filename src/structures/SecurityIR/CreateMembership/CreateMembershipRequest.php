<?php

namespace Sunaoka\Aws\Structures\SecurityIR\CreateMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $membershipName
 * @property list<Shapes\IncidentResponder> $incidentResponseTeam
 * @property list<Shapes\OptInFeature>|null $optInFeatures
 * @property array<string, string>|null $tags
 */
class CreateMembershipRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     membershipName: string,
     *     incidentResponseTeam: list<Shapes\IncidentResponder>,
     *     optInFeatures?: list<Shapes\OptInFeature>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
