<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetProposal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InviteAction>|null $Invitations
 * @property list<RemoveAction>|null $Removals
 */
class ProposalActions extends Shape
{
    /**
     * @param array{
     *     Invitations?: list<InviteAction>|null,
     *     Removals?: list<RemoveAction>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
