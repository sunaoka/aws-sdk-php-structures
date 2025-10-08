<?php

namespace Sunaoka\Aws\Structures\Macie2\DisableMacie;

trait DisableMacieTrait
{
    /**
     * @param DisableMacieRequest $args
     * @return DisableMacieResponse
     */
    public function disableMacie(DisableMacieRequest $args)
    {
        $result = parent::disableMacie($args->toArray());
        return new DisableMacieResponse($result->toArray());
    }
}
