<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\DisassociateDeviceFromPlacement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectName
 * @property string $placementName
 * @property string $deviceTemplateName
 */
class DisassociateDeviceFromPlacementRequest extends Request
{
    /**
     * @param array{
     *     projectName: string,
     *     placementName: string,
     *     deviceTemplateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
