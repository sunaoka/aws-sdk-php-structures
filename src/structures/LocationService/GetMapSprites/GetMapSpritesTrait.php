<?php

namespace Sunaoka\Aws\Structures\LocationService\GetMapSprites;

trait GetMapSpritesTrait
{
    /**
     * @param GetMapSpritesRequest $args
     * @return GetMapSpritesResponse
     */
    public function getMapSprites(GetMapSpritesRequest $args)
    {
        $result = parent::getMapSprites($args->toArray());
        return new GetMapSpritesResponse($result->toArray());
    }
}
