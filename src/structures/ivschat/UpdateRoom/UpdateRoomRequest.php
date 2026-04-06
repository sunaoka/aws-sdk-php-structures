<?php

namespace Sunaoka\Aws\Structures\ivschat\UpdateRoom;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 * @property list<string>|null $loggingConfigurationIdentifiers
 * @property int<1, 500>|null $maximumMessageLength
 * @property int<1, 100>|null $maximumMessageRatePerSecond
 * @property Shapes\MessageReviewHandler|null $messageReviewHandler
 * @property string|null $name
 */
class UpdateRoomRequest extends Request
{
    /**
     * @param array{
     *     identifier: string,
     *     loggingConfigurationIdentifiers?: list<string>|null,
     *     maximumMessageLength?: int<1, 500>|null,
     *     maximumMessageRatePerSecond?: int<1, 100>|null,
     *     messageReviewHandler?: Shapes\MessageReviewHandler|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
