<?php

namespace Sunaoka\Aws\Structures\GeoMaps\GetGlyphs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FontStack
 * @property string $FontUnicodeRange
 */
class GetGlyphsRequest extends Request
{
    /**
     * @param array{
     *     FontStack: string,
     *     FontUnicodeRange: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
