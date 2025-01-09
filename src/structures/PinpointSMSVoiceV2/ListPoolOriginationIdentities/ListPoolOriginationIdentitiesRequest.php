<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\ListPoolOriginationIdentities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolId
 * @property list<Shapes\PoolOriginationIdentitiesFilter> $Filters
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListPoolOriginationIdentitiesRequest extends Request
{
    /**
     * @param array{
     *     PoolId: string,
     *     Filters?: list<Shapes\PoolOriginationIdentitiesFilter>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
