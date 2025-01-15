<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CopyrightHolder
 * @property 'DISABLED'|'ENABLED'|null $FillLineGap
 * @property string|null $FontFamily
 * @property 'EXCLUDE'|'INCLUDE'|null $StyleControl
 */
class EbuTtDDestinationSettings extends Shape
{
    /**
     * @param array{
     *     CopyrightHolder?: string|null,
     *     FillLineGap?: 'DISABLED'|'ENABLED'|null,
     *     FontFamily?: string|null,
     *     StyleControl?: 'EXCLUDE'|'INCLUDE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
