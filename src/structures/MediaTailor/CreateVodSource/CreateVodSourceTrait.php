<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateVodSource;

trait CreateVodSourceTrait
{
    /**
     * @param CreateVodSourceRequest $args
     * @return CreateVodSourceResponse
     */
    public function createVodSource(CreateVodSourceRequest $args)
    {
        $result = parent::createVodSource($args->toArray());
        return new CreateVodSourceResponse($result->toArray());
    }
}
