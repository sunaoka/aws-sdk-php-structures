<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HDR10'|'HLG_2020'|'REC_601'|'REC_709' $InputColorSpace
 * @property 'HDR10'|'HLG_2020'|'REC_601'|'REC_709' $OutputColorSpace
 * @property string $Uri
 */
class ColorCorrection extends Shape
{
    /**
     * @param array{
     *     InputColorSpace: 'HDR10'|'HLG_2020'|'REC_601'|'REC_709',
     *     OutputColorSpace: 'HDR10'|'HLG_2020'|'REC_601'|'REC_709',
     *     Uri: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
