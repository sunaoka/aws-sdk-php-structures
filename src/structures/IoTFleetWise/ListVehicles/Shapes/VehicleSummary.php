<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListVehicles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $vehicleName
 * @property string $arn
 * @property string $modelManifestArn
 * @property string $decoderManifestArn
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModificationTime
 */
class VehicleSummary extends Shape
{
    /**
     * @param array{
     *     vehicleName: string,
     *     arn: string,
     *     modelManifestArn: string,
     *     decoderManifestArn: string,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     lastModificationTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
