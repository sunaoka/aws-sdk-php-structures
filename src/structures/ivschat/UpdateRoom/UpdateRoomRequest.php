<?php

namespace Sunaoka\Aws\Structures\ivschat\UpdateRoom;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 * @property string|null $name
 * @property int<1, 100>|null $maximumMessageRatePerSecond
 * @property int<1, 500>|null $maximumMessageLength
 * @property Shapes\MessageReviewHandler|null $messageReviewHandler
 * @property list<string>|null $loggingConfigurationIdentifiers
 */
class UpdateRoomRequest extends Request
{
    /**
     * @param array{
     *     identifier: string,
     *     name?: string|null,
     *     maximumMessageRatePerSecond?: int<1, 100>|null,
     *     maximumMessageLength?: int<1, 500>|null,
     *     messageReviewHandler?: Shapes\MessageReviewHandler|null,
     *     loggingConfigurationIdentifiers?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
