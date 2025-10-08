<?php

namespace Sunaoka\Aws\Structures\Macie2\EnableMacie;

trait EnableMacieTrait
{
    /**
     * @param EnableMacieRequest $args
     * @return EnableMacieResponse
     */
    public function enableMacie(EnableMacieRequest $args)
    {
        $result = parent::enableMacie($args->toArray());
        return new EnableMacieResponse($result->toArray());
    }
}
