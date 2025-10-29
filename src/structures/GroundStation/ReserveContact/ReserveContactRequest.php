<?php

namespace Sunaoka\Aws\Structures\GroundStation\ReserveContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $missionProfileArn
 * @property string|null $satelliteArn
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $groundStation
 * @property array<string, string>|null $tags
 * @property Shapes\TrackingOverrides|null $trackingOverrides
 */
class ReserveContactRequest extends Request
{
    /**
     * @param array{
     *     missionProfileArn: string,
     *     satelliteArn?: string|null,
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult,
     *     groundStation: string,
     *     tags?: array<string, string>|null,
     *     trackingOverrides?: Shapes\TrackingOverrides|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
