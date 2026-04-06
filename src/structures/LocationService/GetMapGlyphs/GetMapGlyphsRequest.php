<?php

namespace Sunaoka\Aws\Structures\LocationService\GetMapGlyphs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FontStack
 * @property string $FontUnicodeRange
 * @property string|null $Key
 * @property string $MapName
 */
class GetMapGlyphsRequest extends Request
{
    /**
     * @param array{
     *     FontStack: string,
     *     FontUnicodeRange: string,
     *     Key?: string|null,
     *     MapName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
