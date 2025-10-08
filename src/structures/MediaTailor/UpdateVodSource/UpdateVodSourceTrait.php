<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateVodSource;

trait UpdateVodSourceTrait
{
    /**
     * @param UpdateVodSourceRequest $args
     * @return UpdateVodSourceResponse
     */
    public function updateVodSource(UpdateVodSourceRequest $args)
    {
        $result = parent::updateVodSource($args->toArray());
        return new UpdateVodSourceResponse($result->toArray());
    }
}
