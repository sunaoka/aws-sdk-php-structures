<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\ListProposals;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkId
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListProposalsRequest extends Request
{
    /**
     * @param array{
     *     NetworkId: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
