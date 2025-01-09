<?php

namespace Sunaoka\Aws\Structures\Braket\SearchDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\SearchDevicesFilter> $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class SearchDevicesRequest extends Request
{
    /**
     * @param array{
     *     filters: list<Shapes\SearchDevicesFilter>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
