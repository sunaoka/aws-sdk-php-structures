<?php

namespace Sunaoka\Aws\Structures\ControlTower\CreateLandingZone;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $version
 * @property list<'INHERITANCE_DRIFT'>|null $remediationTypes
 * @property array<string, string>|null $tags
 * @property Shapes\Manifest|null $manifest
 */
class CreateLandingZoneRequest extends Request
{
    /**
     * @param array{
     *     version: string,
     *     remediationTypes?: list<'INHERITANCE_DRIFT'>|null,
     *     tags?: array<string, string>|null,
     *     manifest?: Shapes\Manifest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
