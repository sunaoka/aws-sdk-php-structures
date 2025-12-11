<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobsQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UPCONVERT'|'DISABLED'|null $Convert608To708
 * @property int<1, 4>|null $SourceAncillaryChannelNumber
 * @property 'END_OF_INPUT'|'DISABLED'|null $TerminateCaptions
 */
class AncillarySourceSettings extends Shape
{
    /**
     * @param array{
     *     Convert608To708?: 'UPCONVERT'|'DISABLED'|null,
     *     SourceAncillaryChannelNumber?: int<1, 4>|null,
     *     TerminateCaptions?: 'END_OF_INPUT'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
