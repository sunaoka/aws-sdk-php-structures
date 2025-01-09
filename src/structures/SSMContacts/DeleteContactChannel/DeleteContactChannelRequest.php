<?php

namespace Sunaoka\Aws\Structures\SSMContacts\DeleteContactChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactChannelId
 */
class DeleteContactChannelRequest extends Request
{
    /**
     * @param array{ContactChannelId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
