<?php

namespace Sunaoka\Aws\Structures\ivschat\UpdateRoom;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 * @property string $name
 * @property int $maximumMessageRatePerSecond
 * @property int $maximumMessageLength
 * @property Shapes\MessageReviewHandler $messageReviewHandler
 * @property list<string> $loggingConfigurationIdentifiers
 */
class UpdateRoomRequest extends Request
{
    /**
     * @param array{
     *     identifier: string,
     *     name?: string,
     *     maximumMessageRatePerSecond?: int,
     *     maximumMessageLength?: int,
     *     messageReviewHandler?: Shapes\MessageReviewHandler,
     *     loggingConfigurationIdentifiers?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
