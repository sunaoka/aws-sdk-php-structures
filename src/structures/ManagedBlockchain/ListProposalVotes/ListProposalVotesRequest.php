<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\ListProposalVotes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkId
 * @property string $ProposalId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListProposalVotesRequest extends Request
{
    /**
     * @param array{
     *     NetworkId: string,
     *     ProposalId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
