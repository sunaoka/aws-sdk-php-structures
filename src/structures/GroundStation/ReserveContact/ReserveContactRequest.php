<?php

namespace Sunaoka\Aws\Structures\GroundStation\ReserveContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $groundStation
 * @property string $missionProfileArn
 * @property string $satelliteArn
 * @property \Aws\Api\DateTimeResult $startTime
 * @property array<string, string> $tags
 */
class ReserveContactRequest extends Request
{
    /**
     * @param array{
     *     endTime: \Aws\Api\DateTimeResult,
     *     groundStation: string,
     *     missionProfileArn: string,
     *     satelliteArn: string,
     *     startTime: \Aws\Api\DateTimeResult,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
