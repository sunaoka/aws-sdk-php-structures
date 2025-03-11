<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CopyrightHolder
 * @property 'DISABLED'|'ENABLED'|null $FillLineGap
 * @property string|null $FontFamily
 * @property 'EXCLUDE'|'INCLUDE'|null $StyleControl
 * @property int<1, 800>|null $DefaultFontSize
 * @property int<80, 800>|null $DefaultLineHeight
 */
class EbuTtDDestinationSettings extends Shape
{
    /**
     * @param array{
     *     CopyrightHolder?: string|null,
     *     FillLineGap?: 'DISABLED'|'ENABLED'|null,
     *     FontFamily?: string|null,
     *     StyleControl?: 'EXCLUDE'|'INCLUDE'|null,
     *     DefaultFontSize?: int<1, 800>|null,
     *     DefaultLineHeight?: int<80, 800>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
