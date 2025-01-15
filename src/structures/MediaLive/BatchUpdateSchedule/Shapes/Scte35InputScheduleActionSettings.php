<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InputAttachmentNameReference
 * @property 'FIXED'|'FOLLOW_ACTIVE' $Mode
 */
class Scte35InputScheduleActionSettings extends Shape
{
    /**
     * @param array{
     *     InputAttachmentNameReference?: string|null,
     *     Mode: 'FIXED'|'FOLLOW_ACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
