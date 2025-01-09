<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\AssociateDeviceWithPlacement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectName
 * @property string $placementName
 * @property string $deviceId
 * @property string $deviceTemplateName
 */
class AssociateDeviceWithPlacementRequest extends Request
{
    /**
     * @param array{
     *     projectName: string,
     *     placementName: string,
     *     deviceId: string,
     *     deviceTemplateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
