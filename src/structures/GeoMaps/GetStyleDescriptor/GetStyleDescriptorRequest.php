<?php

namespace Sunaoka\Aws\Structures\GeoMaps\GetStyleDescriptor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Standard'|'Monochrome'|'Hybrid'|'Satellite' $Style
 * @property 'Light'|'Dark'|null $ColorScheme
 * @property string|null $PoliticalView
 * @property string|null $Key
 */
class GetStyleDescriptorRequest extends Request
{
    /**
     * @param array{
     *     Style: 'Standard'|'Monochrome'|'Hybrid'|'Satellite',
     *     ColorScheme?: 'Light'|'Dark'|null,
     *     PoliticalView?: string|null,
     *     Key?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
