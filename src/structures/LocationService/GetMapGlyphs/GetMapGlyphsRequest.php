<?php

namespace Sunaoka\Aws\Structures\LocationService\GetMapGlyphs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MapName
 * @property string $FontStack
 * @property string $FontUnicodeRange
 * @property string|null $Key
 */
class GetMapGlyphsRequest extends Request
{
    /**
     * @param array{
     *     MapName: string,
     *     FontStack: string,
     *     FontUnicodeRange: string,
     *     Key?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
