<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\ListProposalVotes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'YES'|'NO'|null $Vote
 * @property string|null $MemberName
 * @property string|null $MemberId
 */
class VoteSummary extends Shape
{
    /**
     * @param array{
     *     Vote?: 'YES'|'NO'|null,
     *     MemberName?: string|null,
     *     MemberId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
