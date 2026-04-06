<?php

namespace Sunaoka\Aws\Structures\Emr\SetUnhealthyNodeReplacement;

trait SetUnhealthyNodeReplacementTrait
{
    /**
     * @param SetUnhealthyNodeReplacementRequest $args
     * @return void
     */
    public function setUnhealthyNodeReplacement(SetUnhealthyNodeReplacementRequest $args)
    {
        parent::setUnhealthyNodeReplacement($args->toArray());
    }
}
