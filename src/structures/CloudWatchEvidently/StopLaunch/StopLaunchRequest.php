<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\StopLaunch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'COMPLETED'|'CANCELLED'|null $desiredState
 * @property string $launch
 * @property string $project
 * @property string|null $reason
 */
class StopLaunchRequest extends Request
{
    /**
     * @param array{
     *     desiredState?: 'COMPLETED'|'CANCELLED'|null,
     *     launch: string,
     *     project: string,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
