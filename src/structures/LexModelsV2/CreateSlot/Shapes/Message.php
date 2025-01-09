<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PlainTextMessage $plainTextMessage
 * @property CustomPayload $customPayload
 * @property SSMLMessage $ssmlMessage
 * @property ImageResponseCard $imageResponseCard
 */
class Message extends Shape
{
    /**
     * @param array{
     *     plainTextMessage?: PlainTextMessage,
     *     customPayload?: CustomPayload,
     *     ssmlMessage?: SSMLMessage,
     *     imageResponseCard?: ImageResponseCard
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
