<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DeleteVodSource;

trait DeleteVodSourceTrait
{
    /**
     * @param DeleteVodSourceRequest $args
     * @return DeleteVodSourceResponse
     */
    public function deleteVodSource(DeleteVodSourceRequest $args)
    {
        $result = parent::deleteVodSource($args->toArray());
        return new DeleteVodSourceResponse($result->toArray());
    }
}
