<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\PutChannelExpirationSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ExpirationDays
 * @property 'CREATED_TIMESTAMP'|'LAST_MESSAGE_TIMESTAMP' $ExpirationCriterion
 */
class ExpirationSettings extends Shape
{
    /**
     * @param array{
     *     ExpirationDays: int,
     *     ExpirationCriterion: 'CREATED_TIMESTAMP'|'LAST_MESSAGE_TIMESTAMP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
