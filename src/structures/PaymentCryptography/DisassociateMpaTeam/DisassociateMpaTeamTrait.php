<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\DisassociateMpaTeam;

trait DisassociateMpaTeamTrait
{
    /**
     * @param DisassociateMpaTeamRequest $args
     * @return DisassociateMpaTeamResponse
     */
    public function disassociateMpaTeam(DisassociateMpaTeamRequest $args)
    {
        $result = parent::disassociateMpaTeam($args->toArray());
        return new DisassociateMpaTeamResponse($result->toArray());
    }
}
