<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEU'|'ENG'|'FRA'|'NLD'|'POR'|'SPA' $OcrLanguage
 * @property int $Pid
 */
class Scte27SourceSettings extends Shape
{
    /**
     * @param array{
     *     OcrLanguage?: 'DEU'|'ENG'|'FRA'|'NLD'|'POR'|'SPA',
     *     Pid?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
