<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\ListChannelContracts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $catalog
 * @property 'MANAGED_SERVICES_ATTESTATION' $contractType
 * @property list<'PENDING'|'ACCEPTED'|'EXPIRED'|'CANCELED'|'INACTIVE'>|null $statuses
 * @property Shapes\ListChannelContractsTypeFilters|null $contractTypeFilters
 * @property Shapes\ListChannelContractsTypeSort|null $contractTypeSort
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListChannelContractsRequest extends Request
{
    /**
     * @param array{
     *     catalog: string,
     *     contractType: 'MANAGED_SERVICES_ATTESTATION',
     *     statuses?: list<'PENDING'|'ACCEPTED'|'EXPIRED'|'CANCELED'|'INACTIVE'>|null,
     *     contractTypeFilters?: Shapes\ListChannelContractsTypeFilters|null,
     *     contractTypeSort?: Shapes\ListChannelContractsTypeSort|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
