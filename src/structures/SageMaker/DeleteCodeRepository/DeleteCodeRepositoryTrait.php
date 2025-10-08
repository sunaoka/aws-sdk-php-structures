<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteCodeRepository;

trait DeleteCodeRepositoryTrait
{
    /**
     * @param DeleteCodeRepositoryRequest $args
     * @return void
     */
    public function deleteCodeRepository(DeleteCodeRepositoryRequest $args)
    {
        parent::deleteCodeRepository($args->toArray());
    }
}
