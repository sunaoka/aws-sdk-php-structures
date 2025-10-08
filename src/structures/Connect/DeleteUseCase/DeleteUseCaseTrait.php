<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteUseCase;

trait DeleteUseCaseTrait
{
    /**
     * @param DeleteUseCaseRequest $args
     * @return void
     */
    public function deleteUseCase(DeleteUseCaseRequest $args)
    {
        parent::deleteUseCase($args->toArray());
    }
}
