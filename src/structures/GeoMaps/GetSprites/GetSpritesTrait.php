<?php

namespace Sunaoka\Aws\Structures\GeoMaps\GetSprites;

trait GetSpritesTrait
{
    /**
     * @param GetSpritesRequest $args
     * @return GetSpritesResponse
     */
    public function getSprites(GetSpritesRequest $args)
    {
        $result = parent::getSprites($args->toArray());
        return new GetSpritesResponse($result->toArray());
    }
}
