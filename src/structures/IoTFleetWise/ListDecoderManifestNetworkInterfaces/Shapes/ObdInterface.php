<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListDecoderManifestNetworkInterfaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property int<0, max> $requestMessageId
 * @property string $obdStandard
 * @property int<0, max> $pidRequestIntervalSeconds
 * @property int<0, max> $dtcRequestIntervalSeconds
 * @property bool $useExtendedIds
 * @property bool $hasTransmissionEcu
 */
class ObdInterface extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     requestMessageId: int<0, max>,
     *     obdStandard?: string,
     *     pidRequestIntervalSeconds?: int<0, max>,
     *     dtcRequestIntervalSeconds?: int<0, max>,
     *     useExtendedIds?: bool,
     *     hasTransmissionEcu?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
