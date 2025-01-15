<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property string $trackerName
 * @property string $deviceId
 * @property LocationTimestamp|null $timestamp
 * @property string $latitude
 * @property string $longitude
 */
class LocationAction extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     trackerName: string,
     *     deviceId: string,
     *     timestamp?: LocationTimestamp|null,
     *     latitude: string,
     *     longitude: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
