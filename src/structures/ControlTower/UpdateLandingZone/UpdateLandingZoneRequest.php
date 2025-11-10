<?php

namespace Sunaoka\Aws\Structures\ControlTower\UpdateLandingZone;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $version
 * @property Shapes\Manifest $manifest
 * @property list<'INHERITANCE_DRIFT'>|null $remediationTypes
 * @property string $landingZoneIdentifier
 */
class UpdateLandingZoneRequest extends Request
{
    /**
     * @param array{
     *     version: string,
     *     manifest: Shapes\Manifest,
     *     remediationTypes?: list<'INHERITANCE_DRIFT'>|null,
     *     landingZoneIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
