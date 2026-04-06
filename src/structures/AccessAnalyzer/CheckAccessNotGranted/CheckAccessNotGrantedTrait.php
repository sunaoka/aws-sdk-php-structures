<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CheckAccessNotGranted;

trait CheckAccessNotGrantedTrait
{
    /**
     * @param CheckAccessNotGrantedRequest $args
     * @return CheckAccessNotGrantedResponse
     */
    public function checkAccessNotGranted(CheckAccessNotGrantedRequest $args)
    {
        $result = parent::checkAccessNotGranted($args->toArray());
        return new CheckAccessNotGrantedResponse($result->toArray());
    }
}
