<?php

namespace Sunaoka\Aws\Structures\Emr\CreatePersistentAppUI;

trait CreatePersistentAppUITrait
{
    /**
     * @param CreatePersistentAppUIRequest $args
     * @return CreatePersistentAppUIResponse
     */
    public function createPersistentAppUI(CreatePersistentAppUIRequest $args)
    {
        $result = parent::createPersistentAppUI($args->toArray());
        return new CreatePersistentAppUIResponse($result->toArray());
    }
}
