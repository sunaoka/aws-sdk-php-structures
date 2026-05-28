<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\ListSubscriptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientId
 * @property string|null $nextToken
 * @property int<1, 200>|null $maxResults
 */
class ListSubscriptionsRequest extends Request
{
    /**
     * @param array{
     *     clientId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 200>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
