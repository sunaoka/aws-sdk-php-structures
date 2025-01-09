<?php

namespace Sunaoka\Aws\Structures\ivschat\UpdateRoom;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 * @property string $name
 * @property int<1, 100> $maximumMessageRatePerSecond
 * @property int<1, 500> $maximumMessageLength
 * @property Shapes\MessageReviewHandler $messageReviewHandler
 * @property list<string> $loggingConfigurationIdentifiers
 */
class UpdateRoomRequest extends Request
{
    /**
     * @param array{
     *     identifier: string,
     *     name?: string,
     *     maximumMessageRatePerSecond?: int<1, 100>,
     *     maximumMessageLength?: int<1, 500>,
     *     messageReviewHandler?: Shapes\MessageReviewHandler,
     *     loggingConfigurationIdentifiers?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
