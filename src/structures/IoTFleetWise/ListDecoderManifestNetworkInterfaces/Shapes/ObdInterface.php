<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListDecoderManifestNetworkInterfaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property int<0, max> $requestMessageId
 * @property string|null $obdStandard
 * @property int<0, max>|null $pidRequestIntervalSeconds
 * @property int<0, max>|null $dtcRequestIntervalSeconds
 * @property bool|null $useExtendedIds
 * @property bool|null $hasTransmissionEcu
 */
class ObdInterface extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     requestMessageId: int<0, max>,
     *     obdStandard?: string|null,
     *     pidRequestIntervalSeconds?: int<0, max>|null,
     *     dtcRequestIntervalSeconds?: int<0, max>|null,
     *     useExtendedIds?: bool|null,
     *     hasTransmissionEcu?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
