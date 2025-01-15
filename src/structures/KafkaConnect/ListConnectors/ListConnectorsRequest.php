<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListConnectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $connectorNamePrefix
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListConnectorsRequest extends Request
{
    /**
     * @param array{
     *     connectorNamePrefix?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
