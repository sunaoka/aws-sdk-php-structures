<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListConnectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectorNamePrefix
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListConnectorsRequest extends Request
{
    /**
     * @param array{
     *     connectorNamePrefix?: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
