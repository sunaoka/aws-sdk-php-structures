<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\ListProposals;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListProposalsRequest extends Request
{
    /**
     * @param array{
     *     NetworkId: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
