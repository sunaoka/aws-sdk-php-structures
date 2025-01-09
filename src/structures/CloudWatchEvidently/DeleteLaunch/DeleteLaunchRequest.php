<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\DeleteLaunch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $launch
 * @property string $project
 */
class DeleteLaunchRequest extends Request
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
