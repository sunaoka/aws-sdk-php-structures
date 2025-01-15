<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetworkChangeSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property int $PolicyVersionId
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class GetCoreNetworkChangeSetRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     PolicyVersionId: int,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
