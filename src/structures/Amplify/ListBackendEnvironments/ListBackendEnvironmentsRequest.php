<?php

namespace Sunaoka\Aws\Structures\Amplify\ListBackendEnvironments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $environmentName
 * @property string $nextToken
 * @property int<0, 50> $maxResults
 */
class ListBackendEnvironmentsRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     environmentName?: string,
     *     nextToken?: string,
     *     maxResults?: int<0, 50>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
