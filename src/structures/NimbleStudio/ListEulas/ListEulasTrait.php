<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\ListEulas;

trait ListEulasTrait
{
    /**
     * @param ListEulasRequest $args
     * @return ListEulasResponse
     */
    public function listEulas(ListEulasRequest $args)
    {
        $result = parent::listEulas($args->toArray());
        return new ListEulasResponse($result->toArray());
    }
}
