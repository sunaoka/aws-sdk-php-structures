<?php

namespace Sunaoka\Aws\Structures\QApps\ListQApps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property int<1, 100> $limit
 * @property string $nextToken
 */
class ListQAppsRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     limit?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
