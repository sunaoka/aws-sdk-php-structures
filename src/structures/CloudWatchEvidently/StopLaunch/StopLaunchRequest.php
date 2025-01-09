<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\StopLaunch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'COMPLETED'|'CANCELLED' $desiredState
 * @property string $launch
 * @property string $project
 * @property string $reason
 */
class StopLaunchRequest extends Request
{
    /**
     * @param array{
     *     desiredState?: 'COMPLETED'|'CANCELLED',
     *     launch: string,
     *     project: string,
     *     reason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
