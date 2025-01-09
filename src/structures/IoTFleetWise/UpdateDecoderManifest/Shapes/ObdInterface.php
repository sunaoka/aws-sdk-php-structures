<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateDecoderManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property int $requestMessageId
 * @property string $obdStandard
 * @property int $pidRequestIntervalSeconds
 * @property int $dtcRequestIntervalSeconds
 * @property bool $useExtendedIds
 * @property bool $hasTransmissionEcu
 */
class ObdInterface extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     requestMessageId: int,
     *     obdStandard?: string,
     *     pidRequestIntervalSeconds?: int,
     *     dtcRequestIntervalSeconds?: int,
     *     useExtendedIds?: bool,
     *     hasTransmissionEcu?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
