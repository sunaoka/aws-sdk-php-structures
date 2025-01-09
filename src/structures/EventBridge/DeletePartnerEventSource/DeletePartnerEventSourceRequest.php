<?php

namespace Sunaoka\Aws\Structures\EventBridge\DeletePartnerEventSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Account
 */
class DeletePartnerEventSourceRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Account: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
