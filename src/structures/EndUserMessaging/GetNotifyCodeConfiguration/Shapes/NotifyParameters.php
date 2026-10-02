<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\GetNotifyCodeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $notifyTemplateId
 * @property string|null $voiceId
 */
class NotifyParameters extends Shape
{
    /**
     * @param array{
     *     notifyTemplateId?: string|null,
     *     voiceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
