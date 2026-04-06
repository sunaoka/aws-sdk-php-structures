<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListCoreNetworkRoutingInformation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property string $SegmentName
 * @property string $EdgeLocation
 * @property array<string, list<string>>|null $NextHopFilters
 * @property list<string>|null $LocalPreferenceMatches
 * @property list<string>|null $ExactAsPathMatches
 * @property list<string>|null $MedMatches
 * @property list<string>|null $CommunityMatches
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class ListCoreNetworkRoutingInformationRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     SegmentName: string,
     *     EdgeLocation: string,
     *     NextHopFilters?: array<string, list<string>>|null,
     *     LocalPreferenceMatches?: list<string>|null,
     *     ExactAsPathMatches?: list<string>|null,
     *     MedMatches?: list<string>|null,
     *     CommunityMatches?: list<string>|null,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
