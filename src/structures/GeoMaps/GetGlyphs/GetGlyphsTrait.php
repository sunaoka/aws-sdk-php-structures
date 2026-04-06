<?php

namespace Sunaoka\Aws\Structures\GeoMaps\GetGlyphs;

trait GetGlyphsTrait
{
    /**
     * @param GetGlyphsRequest $args
     * @return GetGlyphsResponse
     */
    public function getGlyphs(GetGlyphsRequest $args)
    {
        $result = parent::getGlyphs($args->toArray());
        return new GetGlyphsResponse($result->toArray());
    }
}
