<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\AssociateMpaTeam;

trait AssociateMpaTeamTrait
{
    /**
     * @param AssociateMpaTeamRequest $args
     * @return AssociateMpaTeamResponse
     */
    public function associateMpaTeam(AssociateMpaTeamRequest $args)
    {
        $result = parent::associateMpaTeam($args->toArray());
        return new AssociateMpaTeamResponse($result->toArray());
    }
}
