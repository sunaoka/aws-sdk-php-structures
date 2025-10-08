<?php

namespace Sunaoka\Aws\Structures\CodeCommit\MergeBranchesBySquash;

trait MergeBranchesBySquashTrait
{
    /**
     * @param MergeBranchesBySquashRequest $args
     * @return MergeBranchesBySquashResponse
     */
    public function mergeBranchesBySquash(MergeBranchesBySquashRequest $args)
    {
        $result = parent::mergeBranchesBySquash($args->toArray());
        return new MergeBranchesBySquashResponse($result->toArray());
    }
}
