<?php

namespace Sunaoka\Aws\Structures\Amplify\ListBackendEnvironments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string|null $environmentName
 * @property string|null $nextToken
 * @property int<0, 50>|null $maxResults
 */
class ListBackendEnvironmentsRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     environmentName?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
