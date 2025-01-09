<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ActivateContactChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactChannelId
 * @property string $ActivationCode
 */
class ActivateContactChannelRequest extends Request
{
    /**
     * @param array{
     *     ContactChannelId: string,
     *     ActivationCode: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
