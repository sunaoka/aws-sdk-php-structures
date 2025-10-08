<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyClusterDbRevision;

trait ModifyClusterDbRevisionTrait
{
    /**
     * @param ModifyClusterDbRevisionRequest $args
     * @return ModifyClusterDbRevisionResponse
     */
    public function modifyClusterDbRevision(ModifyClusterDbRevisionRequest $args)
    {
        $result = parent::modifyClusterDbRevision($args->toArray());
        return new ModifyClusterDbRevisionResponse($result->toArray());
    }
}
