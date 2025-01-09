<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\GetDevicesInPlacement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectName
 * @property string $placementName
 */
class GetDevicesInPlacementRequest extends Request
{
    /**
     * @param array{
     *     projectName: string,
     *     placementName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
