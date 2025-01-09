<?php

namespace Sunaoka\Aws\Structures\GameLift\StopGameSessionPlacement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PlacementId
 */
class StopGameSessionPlacementRequest extends Request
{
    /**
     * @param array{PlacementId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
