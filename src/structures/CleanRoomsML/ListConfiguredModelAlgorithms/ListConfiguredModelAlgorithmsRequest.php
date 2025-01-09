<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListConfiguredModelAlgorithms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $maxResults
 */
class ListConfiguredModelAlgorithmsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
