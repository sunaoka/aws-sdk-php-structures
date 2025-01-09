<?php

namespace Sunaoka\Aws\Structures\Proton\ListServices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 */
class ListServicesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
