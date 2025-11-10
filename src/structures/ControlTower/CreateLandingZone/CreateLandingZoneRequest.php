<?php

namespace Sunaoka\Aws\Structures\ControlTower\CreateLandingZone;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $version
 * @property Shapes\Manifest $manifest
 * @property list<'INHERITANCE_DRIFT'>|null $remediationTypes
 * @property array<string, string>|null $tags
 */
class CreateLandingZoneRequest extends Request
{
    /**
     * @param array{
     *     version: string,
     *     manifest: Shapes\Manifest,
     *     remediationTypes?: list<'INHERITANCE_DRIFT'>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
