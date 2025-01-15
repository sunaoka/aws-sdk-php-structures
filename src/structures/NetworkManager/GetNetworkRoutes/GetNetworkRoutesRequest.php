<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkRoutes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property Shapes\RouteTableIdentifier $RouteTableIdentifier
 * @property list<string>|null $ExactCidrMatches
 * @property list<string>|null $LongestPrefixMatches
 * @property list<string>|null $SubnetOfMatches
 * @property list<string>|null $SupernetOfMatches
 * @property list<string>|null $PrefixListIds
 * @property list<'ACTIVE'|'BLACKHOLE'>|null $States
 * @property list<'PROPAGATED'|'STATIC'>|null $Types
 * @property array<string, list<string>>|null $DestinationFilters
 */
class GetNetworkRoutesRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     RouteTableIdentifier: Shapes\RouteTableIdentifier,
     *     ExactCidrMatches?: list<string>|null,
     *     LongestPrefixMatches?: list<string>|null,
     *     SubnetOfMatches?: list<string>|null,
     *     SupernetOfMatches?: list<string>|null,
     *     PrefixListIds?: list<string>|null,
     *     States?: list<'ACTIVE'|'BLACKHOLE'>|null,
     *     Types?: list<'PROPAGATED'|'STATIC'>|null,
     *     DestinationFilters?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
