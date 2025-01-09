<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListCustomPlugins;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $maxResults
 * @property string $namePrefix
 * @property string $nextToken
 */
class ListCustomPluginsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>,
     *     namePrefix?: string,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
