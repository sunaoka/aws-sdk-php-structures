<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateProposal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InviteAction> $Invitations
 * @property list<RemoveAction> $Removals
 */
class ProposalActions extends Shape
{
    /**
     * @param array{
     *     Invitations?: list<InviteAction>,
     *     Removals?: list<RemoveAction>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
