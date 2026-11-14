<?php

namespace Sunaoka\Aws\Structures\LambdaCore\CreateRuntime;

trait CreateRuntimeTrait
{
    /**
     * @param CreateRuntimeRequest $args
     * @return CreateRuntimeResponse
     */
    public function createRuntime(CreateRuntimeRequest $args)
    {
        $result = parent::createRuntime($args->toArray());
        return new CreateRuntimeResponse($result->toArray());
    }
}
