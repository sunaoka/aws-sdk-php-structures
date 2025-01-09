<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetSegmentDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ColorBars'|'EndCredits'|'BlackFrames'|'OpeningCredits'|'StudioLogo'|'Slate'|'Content' $Type
 * @property float $Confidence
 */
class TechnicalCueSegment extends Shape
{
    /**
     * @param array{
     *     Type?: 'ColorBars'|'EndCredits'|'BlackFrames'|'OpeningCredits'|'StudioLogo'|'Slate'|'Content',
     *     Confidence?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
