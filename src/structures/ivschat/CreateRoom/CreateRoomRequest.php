<?php

namespace Sunaoka\Aws\Structures\ivschat\CreateRoom;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $loggingConfigurationIdentifiers
 * @property int<1, 500>|null $maximumMessageLength
 * @property int<1, 100>|null $maximumMessageRatePerSecond
 * @property Shapes\MessageReviewHandler|null $messageReviewHandler
 * @property string|null $name
 * @property array<string, string>|null $tags
 */
class CreateRoomRequest extends Request
{
    /**
     * @param array{
     *     loggingConfigurationIdentifiers?: list<string>|null,
     *     maximumMessageLength?: int<1, 500>|null,
     *     maximumMessageRatePerSecond?: int<1, 100>|null,
     *     messageReviewHandler?: Shapes\MessageReviewHandler|null,
     *     name?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
