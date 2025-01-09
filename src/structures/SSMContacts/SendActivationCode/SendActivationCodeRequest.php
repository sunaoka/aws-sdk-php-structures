<?php

namespace Sunaoka\Aws\Structures\SSMContacts\SendActivationCode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactChannelId
 */
class SendActivationCodeRequest extends Request
{
    /**
     * @param array{ContactChannelId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
