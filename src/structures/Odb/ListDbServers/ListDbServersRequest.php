<?php

namespace Sunaoka\Aws\Structures\Odb\ListDbServers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cloudExadataInfrastructureId
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListDbServersRequest extends Request
{
    /**
     * @param array{
     *     cloudExadataInfrastructureId: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
