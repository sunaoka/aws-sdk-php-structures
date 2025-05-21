<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InputSdpLocation>|null $AncillarySdps
 * @property list<InputSdpLocation>|null $AudioSdps
 * @property InputSdpLocation|null $VideoSdp
 */
class Smpte2110ReceiverGroupSdpSettings extends Shape
{
    /**
     * @param array{
     *     AncillarySdps?: list<InputSdpLocation>|null,
     *     AudioSdps?: list<InputSdpLocation>|null,
     *     VideoSdp?: InputSdpLocation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
