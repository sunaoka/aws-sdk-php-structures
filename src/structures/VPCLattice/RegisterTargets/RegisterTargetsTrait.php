<?php

namespace Sunaoka\Aws\Structures\VPCLattice\RegisterTargets;

trait RegisterTargetsTrait
{
    /**
     * @param RegisterTargetsRequest $args
     * @return RegisterTargetsResponse
     */
    public function registerTargets(RegisterTargetsRequest $args)
    {
        $result = parent::registerTargets($args->toArray());
        return new RegisterTargetsResponse($result->toArray());
    }
}
