<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CopyrightHolder
 * @property 'DISABLED'|'ENABLED' $FillLineGap
 * @property string $FontFamily
 * @property 'EXCLUDE'|'INCLUDE' $StyleControl
 */
class EbuTtDDestinationSettings extends Shape
{
    /**
     * @param array{
     *     CopyrightHolder?: string,
     *     FillLineGap?: 'DISABLED'|'ENABLED',
     *     FontFamily?: string,
     *     StyleControl?: 'EXCLUDE'|'INCLUDE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
