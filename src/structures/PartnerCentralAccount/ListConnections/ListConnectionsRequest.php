<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\ListConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string|null $NextToken
 * @property string|null $ConnectionType
 * @property int<1, 100>|null $MaxResults
 * @property list<string>|null $OtherParticipantIdentifiers
 */
class ListConnectionsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     NextToken?: string|null,
     *     ConnectionType?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     OtherParticipantIdentifiers?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
