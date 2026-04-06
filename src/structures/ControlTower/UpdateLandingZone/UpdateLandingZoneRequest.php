<?php

namespace Sunaoka\Aws\Structures\ControlTower\UpdateLandingZone;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $version
 * @property list<'INHERITANCE_DRIFT'>|null $remediationTypes
 * @property string $landingZoneIdentifier
 * @property Shapes\Manifest|null $manifest
 */
class UpdateLandingZoneRequest extends Request
{
    /**
     * @param array{
     *     version: string,
     *     remediationTypes?: list<'INHERITANCE_DRIFT'>|null,
     *     landingZoneIdentifier: string,
     *     manifest?: Shapes\Manifest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
