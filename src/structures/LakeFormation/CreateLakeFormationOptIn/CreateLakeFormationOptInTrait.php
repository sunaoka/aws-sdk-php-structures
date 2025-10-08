<?php

namespace Sunaoka\Aws\Structures\LakeFormation\CreateLakeFormationOptIn;

trait CreateLakeFormationOptInTrait
{
    /**
     * @param CreateLakeFormationOptInRequest $args
     * @return CreateLakeFormationOptInResponse
     */
    public function createLakeFormationOptIn(CreateLakeFormationOptInRequest $args)
    {
        $result = parent::createLakeFormationOptIn($args->toArray());
        return new CreateLakeFormationOptInResponse($result->toArray());
    }
}
