<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxDataview;

trait GetKxDataviewTrait
{
    /**
     * @param GetKxDataviewRequest $args
     * @return GetKxDataviewResponse
     */
    public function getKxDataview(GetKxDataviewRequest $args)
    {
        $result = parent::getKxDataview($args->toArray());
        return new GetKxDataviewResponse($result->toArray());
    }
}
