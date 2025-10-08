<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetTile;

trait GetTileTrait
{
    /**
     * @param GetTileRequest $args
     * @return GetTileResponse
     */
    public function getTile(GetTileRequest $args)
    {
        $result = parent::getTile($args->toArray());
        return new GetTileResponse($result->toArray());
    }
}
