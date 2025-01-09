<?php

namespace Sunaoka\Aws\Structures\ControlTower\UpdateLandingZone;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $landingZoneIdentifier
 * @property Shapes\Manifest $manifest
 * @property string $version
 */
class UpdateLandingZoneRequest extends Request
{
    /**
     * @param array{
     *     landingZoneIdentifier: string,
     *     manifest: Shapes\Manifest,
     *     version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
