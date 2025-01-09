<?php

namespace Sunaoka\Aws\Structures\ivschat\CreateRoom;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property int $maximumMessageRatePerSecond
 * @property int $maximumMessageLength
 * @property Shapes\MessageReviewHandler $messageReviewHandler
 * @property array<string, string> $tags
 * @property list<string> $loggingConfigurationIdentifiers
 */
class CreateRoomRequest extends Request
{
    /**
     * @param array{
     *     name?: string,
     *     maximumMessageRatePerSecond?: int,
     *     maximumMessageLength?: int,
     *     messageReviewHandler?: Shapes\MessageReviewHandler,
     *     tags?: array<string, string>,
     *     loggingConfigurationIdentifiers?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
