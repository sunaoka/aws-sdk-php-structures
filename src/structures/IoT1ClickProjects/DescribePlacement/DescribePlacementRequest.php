<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\DescribePlacement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $placementName
 * @property string $projectName
 */
class DescribePlacementRequest extends Request
{
    /**
     * @param array{
     *     placementName: string,
     *     projectName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
