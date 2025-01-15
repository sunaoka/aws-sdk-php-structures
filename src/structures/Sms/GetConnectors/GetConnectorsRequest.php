<?php

namespace Sunaoka\Aws\Structures\Sms\GetConnectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class GetConnectorsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
