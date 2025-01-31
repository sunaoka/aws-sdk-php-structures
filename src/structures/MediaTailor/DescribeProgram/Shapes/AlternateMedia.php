<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DescribeProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceLocationName
 * @property string|null $LiveSourceName
 * @property string|null $VodSourceName
 * @property ClipRange|null $ClipRange
 * @property int|null $ScheduledStartTimeMillis
 * @property list<AdBreak>|null $AdBreaks
 * @property int|null $DurationMillis
 */
class AlternateMedia extends Shape
{
    /**
     * @param array{
     *     SourceLocationName?: string|null,
     *     LiveSourceName?: string|null,
     *     VodSourceName?: string|null,
     *     ClipRange?: ClipRange|null,
     *     ScheduledStartTimeMillis?: int|null,
     *     AdBreaks?: list<AdBreak>|null,
     *     DurationMillis?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
