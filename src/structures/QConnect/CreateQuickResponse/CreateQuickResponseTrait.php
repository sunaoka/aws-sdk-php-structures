<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateQuickResponse;

trait CreateQuickResponseTrait
{
    /**
     * @param CreateQuickResponseRequest $args
     * @return CreateQuickResponseResponse
     */
    public function createQuickResponse(CreateQuickResponseRequest $args)
    {
        $result = parent::createQuickResponse($args->toArray());
        return new CreateQuickResponseResponse($result->toArray());
    }
}
