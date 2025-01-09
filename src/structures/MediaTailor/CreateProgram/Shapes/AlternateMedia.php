<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AdBreak> $AdBreaks
 * @property ClipRange $ClipRange
 * @property int $DurationMillis
 * @property string $LiveSourceName
 * @property int $ScheduledStartTimeMillis
 * @property string $SourceLocationName
 * @property string $VodSourceName
 */
class AlternateMedia extends Shape
{
    /**
     * @param array{
     *     AdBreaks?: list<AdBreak>,
     *     ClipRange?: ClipRange,
     *     DurationMillis?: int,
     *     LiveSourceName?: string,
     *     ScheduledStartTimeMillis?: int,
     *     SourceLocationName?: string,
     *     VodSourceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
