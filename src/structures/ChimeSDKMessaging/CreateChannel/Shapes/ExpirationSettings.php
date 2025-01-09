<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 5475> $ExpirationDays
 * @property 'CREATED_TIMESTAMP'|'LAST_MESSAGE_TIMESTAMP' $ExpirationCriterion
 */
class ExpirationSettings extends Shape
{
    /**
     * @param array{
     *     ExpirationDays: int<1, 5475>,
     *     ExpirationCriterion: 'CREATED_TIMESTAMP'|'LAST_MESSAGE_TIMESTAMP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
