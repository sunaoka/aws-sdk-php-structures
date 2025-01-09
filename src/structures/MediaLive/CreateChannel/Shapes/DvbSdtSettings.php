<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SDT_FOLLOW'|'SDT_FOLLOW_IF_PRESENT'|'SDT_MANUAL'|'SDT_NONE' $OutputSdt
 * @property int<25, 2000> $RepInterval
 * @property string $ServiceName
 * @property string $ServiceProviderName
 */
class DvbSdtSettings extends Shape
{
    /**
     * @param array{
     *     OutputSdt?: 'SDT_FOLLOW'|'SDT_FOLLOW_IF_PRESENT'|'SDT_MANUAL'|'SDT_NONE',
     *     RepInterval?: int<25, 2000>,
     *     ServiceName?: string,
     *     ServiceProviderName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
