<?php

namespace Sunaoka\Aws\Structures\AppFabric\ListAppAuthorizations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appBundleIdentifier
 * @property int $maxResults
 * @property string $nextToken
 */
class ListAppAuthorizationsRequest extends Request
{
    /**
     * @param array{
     *     appBundleIdentifier: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
