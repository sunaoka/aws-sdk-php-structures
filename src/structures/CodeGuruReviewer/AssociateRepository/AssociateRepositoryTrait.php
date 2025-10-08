<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\AssociateRepository;

trait AssociateRepositoryTrait
{
    /**
     * @param AssociateRepositoryRequest $args
     * @return AssociateRepositoryResponse
     */
    public function associateRepository(AssociateRepositoryRequest $args)
    {
        $result = parent::associateRepository($args->toArray());
        return new AssociateRepositoryResponse($result->toArray());
    }
}
