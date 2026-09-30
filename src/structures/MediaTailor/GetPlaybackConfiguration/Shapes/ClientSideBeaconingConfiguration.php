<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetPlaybackConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'INSIGHTS' $ReportingMode
 * @property list<'MUTE'|'UNMUTE'|'PAUSE'|'SKIP'>|null $AdditionalEventTypes
 */
class ClientSideBeaconingConfiguration extends Shape
{
    /**
     * @param array{
     *     ReportingMode: 'DISABLED'|'INSIGHTS',
     *     AdditionalEventTypes?: list<'MUTE'|'UNMUTE'|'PAUSE'|'SKIP'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
