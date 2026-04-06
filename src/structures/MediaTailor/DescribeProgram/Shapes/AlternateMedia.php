<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DescribeProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AdBreak>|null $AdBreaks
 * @property ClipRange|null $ClipRange
 * @property int|null $DurationMillis
 * @property string|null $LiveSourceName
 * @property int|null $ScheduledStartTimeMillis
 * @property string|null $SourceLocationName
 * @property string|null $VodSourceName
 */
class AlternateMedia extends Shape
{
    /**
     * @param array{
     *     AdBreaks?: list<AdBreak>|null,
     *     ClipRange?: ClipRange|null,
     *     DurationMillis?: int|null,
     *     LiveSourceName?: string|null,
     *     ScheduledStartTimeMillis?: int|null,
     *     SourceLocationName?: string|null,
     *     VodSourceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
