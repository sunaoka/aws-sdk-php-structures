<?php

namespace Sunaoka\Aws\Structures\WorkLink\CreateFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetName
 * @property string|null $DisplayName
 * @property bool|null $OptimizeForEndUserLocation
 * @property array<string, string>|null $Tags
 */
class CreateFleetRequest extends Request
{
    /**
     * @param array{
     *     FleetName: string,
     *     DisplayName?: string|null,
     *     OptimizeForEndUserLocation?: bool|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
