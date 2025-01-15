<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PlainTextMessage|null $plainTextMessage
 * @property CustomPayload|null $customPayload
 * @property SSMLMessage|null $ssmlMessage
 * @property ImageResponseCard|null $imageResponseCard
 */
class Message extends Shape
{
    /**
     * @param array{
     *     plainTextMessage?: PlainTextMessage|null,
     *     customPayload?: CustomPayload|null,
     *     ssmlMessage?: SSMLMessage|null,
     *     imageResponseCard?: ImageResponseCard|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
