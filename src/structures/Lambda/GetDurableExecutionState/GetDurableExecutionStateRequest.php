<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecutionState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DurableExecutionArn
 * @property string $CheckpointToken
 * @property string|null $Marker
 * @property int<0, 1000>|null $MaxItems
 */
class GetDurableExecutionStateRequest extends Request
{
    /**
     * @param array{
     *     DurableExecutionArn: string,
     *     CheckpointToken: string,
     *     Marker?: string|null,
     *     MaxItems?: int<0, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
