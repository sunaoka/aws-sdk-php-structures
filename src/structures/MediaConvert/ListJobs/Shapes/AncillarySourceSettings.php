<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UPCONVERT'|'DISABLED' $Convert608To708
 * @property int $SourceAncillaryChannelNumber
 * @property 'END_OF_INPUT'|'DISABLED' $TerminateCaptions
 */
class AncillarySourceSettings extends Shape
{
    /**
     * @param array{
     *     Convert608To708?: 'UPCONVERT'|'DISABLED',
     *     SourceAncillaryChannelNumber?: int,
     *     TerminateCaptions?: 'END_OF_INPUT'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
