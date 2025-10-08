<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxDataview;

trait CreateKxDataviewTrait
{
    /**
     * @param CreateKxDataviewRequest $args
     * @return CreateKxDataviewResponse
     */
    public function createKxDataview(CreateKxDataviewRequest $args)
    {
        $result = parent::createKxDataview($args->toArray());
        return new CreateKxDataviewResponse($result->toArray());
    }
}
