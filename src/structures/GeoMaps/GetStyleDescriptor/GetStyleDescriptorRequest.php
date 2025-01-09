<?php

namespace Sunaoka\Aws\Structures\GeoMaps\GetStyleDescriptor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Standard'|'Monochrome'|'Hybrid'|'Satellite' $Style
 * @property 'Light'|'Dark' $ColorScheme
 * @property string $PoliticalView
 * @property string $Key
 */
class GetStyleDescriptorRequest extends Request
{
    /**
     * @param array{
     *     Style: 'Standard'|'Monochrome'|'Hybrid'|'Satellite',
     *     ColorScheme?: 'Light'|'Dark',
     *     PoliticalView?: string,
     *     Key?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
