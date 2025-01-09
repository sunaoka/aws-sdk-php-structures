<?php

namespace Sunaoka\Aws\Structures\SSMContacts\DeactivateContactChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactChannelId
 */
class DeactivateContactChannelRequest extends Request
{
    /**
     * @param array{ContactChannelId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
