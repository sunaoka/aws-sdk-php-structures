<?php

namespace Sunaoka\Aws\Structures\SSMContacts\GetContactChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactChannelId
 */
class GetContactChannelRequest extends Request
{
    /**
     * @param array{ContactChannelId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
