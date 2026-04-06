<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListLakeFormationOptIns;

trait ListLakeFormationOptInsTrait
{
    /**
     * @param ListLakeFormationOptInsRequest $args
     * @return ListLakeFormationOptInsResponse
     */
    public function listLakeFormationOptIns(ListLakeFormationOptInsRequest $args)
    {
        $result = parent::listLakeFormationOptIns($args->toArray());
        return new ListLakeFormationOptInsResponse($result->toArray());
    }
}
