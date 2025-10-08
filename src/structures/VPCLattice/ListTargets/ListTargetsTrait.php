<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListTargets;

trait ListTargetsTrait
{
    /**
     * @param ListTargetsRequest $args
     * @return ListTargetsResponse
     */
    public function listTargets(ListTargetsRequest $args)
    {
        $result = parent::listTargets($args->toArray());
        return new ListTargetsResponse($result->toArray());
    }
}
