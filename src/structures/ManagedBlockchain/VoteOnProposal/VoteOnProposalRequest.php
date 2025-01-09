<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\VoteOnProposal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkId
 * @property string $ProposalId
 * @property string $VoterMemberId
 * @property 'YES'|'NO' $Vote
 */
class VoteOnProposalRequest extends Request
{
    /**
     * @param array{
     *     NetworkId: string,
     *     ProposalId: string,
     *     VoterMemberId: string,
     *     Vote: 'YES'|'NO'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
