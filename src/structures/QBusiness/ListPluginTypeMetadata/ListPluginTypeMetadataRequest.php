<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListPluginTypeMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 50> $maxResults
 */
class ListPluginTypeMetadataRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 50>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
