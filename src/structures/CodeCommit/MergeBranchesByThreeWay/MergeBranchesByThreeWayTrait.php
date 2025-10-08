<?php

namespace Sunaoka\Aws\Structures\CodeCommit\MergeBranchesByThreeWay;

trait MergeBranchesByThreeWayTrait
{
    /**
     * @param MergeBranchesByThreeWayRequest $args
     * @return MergeBranchesByThreeWayResponse
     */
    public function mergeBranchesByThreeWay(MergeBranchesByThreeWayRequest $args)
    {
        $result = parent::mergeBranchesByThreeWay($args->toArray());
        return new MergeBranchesByThreeWayResponse($result->toArray());
    }
}
