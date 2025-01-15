<?php

namespace Sunaoka\Aws\Structures\ivschat\CreateRoom;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $name
 * @property int<1, 100>|null $maximumMessageRatePerSecond
 * @property int<1, 500>|null $maximumMessageLength
 * @property Shapes\MessageReviewHandler|null $messageReviewHandler
 * @property array<string, string>|null $tags
 * @property list<string>|null $loggingConfigurationIdentifiers
 */
class CreateRoomRequest extends Request
{
    /**
     * @param array{
     *     name?: string|null,
     *     maximumMessageRatePerSecond?: int<1, 100>|null,
     *     maximumMessageLength?: int<1, 500>|null,
     *     messageReviewHandler?: Shapes\MessageReviewHandler|null,
     *     tags?: array<string, string>|null,
     *     loggingConfigurationIdentifiers?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
