<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\UpdatePlacement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $placementName
 * @property string $projectName
 * @property array<string, string> $attributes
 */
class UpdatePlacementRequest extends Request
{
    /**
     * @param array{
     *     placementName: string,
     *     projectName: string,
     *     attributes?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
