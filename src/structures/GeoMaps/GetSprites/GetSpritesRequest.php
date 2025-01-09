<?php

namespace Sunaoka\Aws\Structures\GeoMaps\GetSprites;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileName
 * @property 'Standard'|'Monochrome'|'Hybrid'|'Satellite' $Style
 * @property 'Light'|'Dark' $ColorScheme
 * @property 'Default' $Variant
 */
class GetSpritesRequest extends Request
{
    /**
     * @param array{
     *     FileName: string,
     *     Style: 'Standard'|'Monochrome'|'Hybrid'|'Satellite',
     *     ColorScheme: 'Light'|'Dark',
     *     Variant: 'Default'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
