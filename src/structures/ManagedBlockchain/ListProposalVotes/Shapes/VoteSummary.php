<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\ListProposalVotes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'YES'|'NO' $Vote
 * @property string $MemberName
 * @property string $MemberId
 */
class VoteSummary extends Shape
{
    /**
     * @param array{
     *     Vote?: 'YES'|'NO',
     *     MemberName?: string,
     *     MemberId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
