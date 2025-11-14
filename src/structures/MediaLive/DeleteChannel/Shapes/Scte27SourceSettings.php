<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEU'|'ENG'|'FRA'|'NLD'|'POR'|'SPA'|null $OcrLanguage
 * @property int|null $Pid
 */
class Scte27SourceSettings extends Shape
{
    /**
     * @param array{
     *     OcrLanguage?: 'DEU'|'ENG'|'FRA'|'NLD'|'POR'|'SPA'|null,
     *     Pid?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
