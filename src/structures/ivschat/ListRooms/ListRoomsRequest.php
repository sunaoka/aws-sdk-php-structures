<?php

namespace Sunaoka\Aws\Structures\ivschat\ListRooms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $name
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 * @property string|null $messageReviewHandlerUri
 * @property string|null $loggingConfigurationIdentifier
 */
class ListRoomsRequest extends Request
{
    /**
     * @param array{
     *     name?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null,
     *     messageReviewHandlerUri?: string|null,
     *     loggingConfigurationIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
