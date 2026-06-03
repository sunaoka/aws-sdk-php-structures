<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\PublishWhatsAppFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $flowId
 */
class PublishWhatsAppFlowRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     flowId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
