<?php

namespace Sunaoka\Aws\Structures\ControlTower\DeleteLandingZone;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $landingZoneIdentifier
 */
class DeleteLandingZoneRequest extends Request
{
    /**
     * @param array{landingZoneIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
