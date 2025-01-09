<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameSessionPlacement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PlacementId
 */
class DescribeGameSessionPlacementRequest extends Request
{
    /**
     * @param array{PlacementId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
