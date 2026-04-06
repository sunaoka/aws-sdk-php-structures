<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListCustomPlugins;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $namePrefix
 * @property string|null $nextToken
 */
class ListCustomPluginsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     namePrefix?: string|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
