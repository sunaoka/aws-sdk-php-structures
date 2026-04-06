<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxDataview;

trait UpdateKxDataviewTrait
{
    /**
     * @param UpdateKxDataviewRequest $args
     * @return UpdateKxDataviewResponse
     */
    public function updateKxDataview(UpdateKxDataviewRequest $args)
    {
        $result = parent::updateKxDataview($args->toArray());
        return new UpdateKxDataviewResponse($result->toArray());
    }
}
