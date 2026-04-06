<?php

namespace Sunaoka\Aws\Structures\ControlTower\ResetLandingZone;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $landingZoneIdentifier
 */
class ResetLandingZoneRequest extends Request
{
    /**
     * @param array{landingZoneIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
