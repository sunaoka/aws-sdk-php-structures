<?php

namespace Sunaoka\Aws\Structures\CodeCommit\MergeBranchesByFastForward;

trait MergeBranchesByFastForwardTrait
{
    /**
     * @param MergeBranchesByFastForwardRequest $args
     * @return MergeBranchesByFastForwardResponse
     */
    public function mergeBranchesByFastForward(MergeBranchesByFastForwardRequest $args)
    {
        $result = parent::mergeBranchesByFastForward($args->toArray());
        return new MergeBranchesByFastForwardResponse($result->toArray());
    }
}
