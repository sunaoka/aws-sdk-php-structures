<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\StartLaunch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $launch
 * @property string $project
 */
class StartLaunchRequest extends Request
{
    /**
     * @param array{
     *     launch: string,
     *     project: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
