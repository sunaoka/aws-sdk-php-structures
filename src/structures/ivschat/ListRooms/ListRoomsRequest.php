<?php

namespace Sunaoka\Aws\Structures\ivschat\ListRooms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $loggingConfigurationIdentifier
 * @property int<1, 50>|null $maxResults
 * @property string|null $messageReviewHandlerUri
 * @property string|null $name
 * @property string|null $nextToken
 */
class ListRoomsRequest extends Request
{
    /**
     * @param array{
     *     loggingConfigurationIdentifier?: string|null,
     *     maxResults?: int<1, 50>|null,
     *     messageReviewHandlerUri?: string|null,
     *     name?: string|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
