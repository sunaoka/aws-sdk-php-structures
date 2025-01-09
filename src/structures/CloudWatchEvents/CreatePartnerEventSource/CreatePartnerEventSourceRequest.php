<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\CreatePartnerEventSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Account
 */
class CreatePartnerEventSourceRequest extends Request
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
