<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AuthConnectionArn
 * @property 'SKIP_GAPS'|'FILL_WITH_BLACK'|'HOLD_LAST_FRAME'|null $GapHandling
 * @property string|null $SourceId
 * @property string|null $Timerange
 */
class InputTamsSettings extends Shape
{
    /**
     * @param array{
     *     AuthConnectionArn?: string|null,
     *     GapHandling?: 'SKIP_GAPS'|'FILL_WITH_BLACK'|'HOLD_LAST_FRAME'|null,
     *     SourceId?: string|null,
     *     Timerange?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
