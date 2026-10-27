<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateOutboundEmailContactMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property Shapes\UpdateOutboundEmailContent $EmailMessage
 */
class UpdateOutboundEmailContactMessageRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     EmailMessage: Shapes\UpdateOutboundEmailContent
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
