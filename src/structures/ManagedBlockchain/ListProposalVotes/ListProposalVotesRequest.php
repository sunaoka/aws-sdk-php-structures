<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\ListProposalVotes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkId
 * @property string $ProposalId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListProposalVotesRequest extends Request
{
    /**
     * @param array{
     *     NetworkId: string,
     *     ProposalId: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
