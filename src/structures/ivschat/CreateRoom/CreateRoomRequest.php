<?php

namespace Sunaoka\Aws\Structures\ivschat\CreateRoom;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property int<1, 100> $maximumMessageRatePerSecond
 * @property int<1, 500> $maximumMessageLength
 * @property Shapes\MessageReviewHandler $messageReviewHandler
 * @property array<string, string> $tags
 * @property list<string> $loggingConfigurationIdentifiers
 */
class CreateRoomRequest extends Request
{
    /**
     * @param array{
     *     name?: string,
     *     maximumMessageRatePerSecond?: int<1, 100>,
     *     maximumMessageLength?: int<1, 500>,
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
