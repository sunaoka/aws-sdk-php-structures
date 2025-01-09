<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEU'|'ENG'|'FRA'|'NLD'|'POR'|'SPA' $OcrLanguage
 * @property int<1, max> $Pid
 */
class Scte27SourceSettings extends Shape
{
    /**
     * @param array{
     *     OcrLanguage?: 'DEU'|'ENG'|'FRA'|'NLD'|'POR'|'SPA',
     *     Pid?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
