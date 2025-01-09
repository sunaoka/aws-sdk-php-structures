<?php

namespace Sunaoka\Aws\Structures\NotificationsContacts\SendActivationCode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class SendActivationCodeRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
