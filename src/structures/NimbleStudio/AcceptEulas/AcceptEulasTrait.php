<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\AcceptEulas;

trait AcceptEulasTrait
{
    /**
     * @param AcceptEulasRequest $args
     * @return AcceptEulasResponse
     */
    public function acceptEulas(AcceptEulasRequest $args)
    {
        $result = parent::acceptEulas($args->toArray());
        return new AcceptEulasResponse($result->toArray());
    }
}
