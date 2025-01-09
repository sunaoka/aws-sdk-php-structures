<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetSatellite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $satelliteId
 */
class GetSatelliteRequest extends Request
{
    /**
     * @param array{satelliteId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
