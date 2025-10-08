<?php

namespace Sunaoka\Aws\Structures\LocationService\GetMapTile;

trait GetMapTileTrait
{
    /**
     * @param GetMapTileRequest $args
     * @return GetMapTileResponse
     */
    public function getMapTile(GetMapTileRequest $args)
    {
        $result = parent::getMapTile($args->toArray());
        return new GetMapTileResponse($result->toArray());
    }
}
