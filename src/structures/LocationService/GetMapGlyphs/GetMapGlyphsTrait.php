<?php

namespace Sunaoka\Aws\Structures\LocationService\GetMapGlyphs;

trait GetMapGlyphsTrait
{
    /**
     * @param GetMapGlyphsRequest $args
     * @return GetMapGlyphsResponse
     */
    public function getMapGlyphs(GetMapGlyphsRequest $args)
    {
        $result = parent::getMapGlyphs($args->toArray());
        return new GetMapGlyphsResponse($result->toArray());
    }
}
