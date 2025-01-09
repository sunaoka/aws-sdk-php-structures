<?php

namespace Sunaoka\Aws\Structures\ivschat\ListRooms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $nextToken
 * @property int $maxResults
 * @property string $messageReviewHandlerUri
 * @property string $loggingConfigurationIdentifier
 */
class ListRoomsRequest extends Request
{
    /**
     * @param array{
     *     name?: string,
     *     nextToken?: string,
     *     maxResults?: int,
     *     messageReviewHandlerUri?: string,
     *     loggingConfigurationIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
