<?php

namespace Sunaoka\Aws\Structures\MailManager\DeleteRelay;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RelayId
 */
class DeleteRelayRequest extends Request
{
    /**
     * @param array{RelayId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
