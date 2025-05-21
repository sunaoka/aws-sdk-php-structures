<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Smpte2110ReceiverGroupSdpSettings|null $SdpSettings
 */
class Smpte2110ReceiverGroup extends Shape
{
    /**
     * @param array{SdpSettings?: Smpte2110ReceiverGroupSdpSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
