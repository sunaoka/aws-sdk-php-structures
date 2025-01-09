<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetworkChangeSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property int $PolicyVersionId
 * @property int<1, 500> $MaxResults
 * @property string $NextToken
 */
class GetCoreNetworkChangeSetRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     PolicyVersionId: int,
     *     MaxResults?: int<1, 500>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
