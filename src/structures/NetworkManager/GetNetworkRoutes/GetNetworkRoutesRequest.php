<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkRoutes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property Shapes\RouteTableIdentifier $RouteTableIdentifier
 * @property list<string> $ExactCidrMatches
 * @property list<string> $LongestPrefixMatches
 * @property list<string> $SubnetOfMatches
 * @property list<string> $SupernetOfMatches
 * @property list<string> $PrefixListIds
 * @property list<'ACTIVE'|'BLACKHOLE'> $States
 * @property list<'PROPAGATED'|'STATIC'> $Types
 * @property array<string, list<string>> $DestinationFilters
 */
class GetNetworkRoutesRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     RouteTableIdentifier: Shapes\RouteTableIdentifier,
     *     ExactCidrMatches?: list<string>,
     *     LongestPrefixMatches?: list<string>,
     *     SubnetOfMatches?: list<string>,
     *     SupernetOfMatches?: list<string>,
     *     PrefixListIds?: list<string>,
     *     States?: list<'ACTIVE'|'BLACKHOLE'>,
     *     Types?: list<'PROPAGATED'|'STATIC'>,
     *     DestinationFilters?: array<string, list<string>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
