<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DeleteLakeFormationOptIn;

trait DeleteLakeFormationOptInTrait
{
    /**
     * @param DeleteLakeFormationOptInRequest $args
     * @return DeleteLakeFormationOptInResponse
     */
    public function deleteLakeFormationOptIn(DeleteLakeFormationOptInRequest $args)
    {
        $result = parent::deleteLakeFormationOptIn($args->toArray());
        return new DeleteLakeFormationOptInResponse($result->toArray());
    }
}
