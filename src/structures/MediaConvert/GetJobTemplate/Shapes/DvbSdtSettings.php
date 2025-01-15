<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SDT_FOLLOW'|'SDT_FOLLOW_IF_PRESENT'|'SDT_MANUAL'|'SDT_NONE'|null $OutputSdt
 * @property int<25, 2000>|null $SdtInterval
 * @property string|null $ServiceName
 * @property string|null $ServiceProviderName
 */
class DvbSdtSettings extends Shape
{
    /**
     * @param array{
     *     OutputSdt?: 'SDT_FOLLOW'|'SDT_FOLLOW_IF_PRESENT'|'SDT_MANUAL'|'SDT_NONE'|null,
     *     SdtInterval?: int<25, 2000>|null,
     *     ServiceName?: string|null,
     *     ServiceProviderName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
