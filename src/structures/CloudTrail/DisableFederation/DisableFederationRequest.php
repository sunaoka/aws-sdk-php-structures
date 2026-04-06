<?php

namespace Sunaoka\Aws\Structures\CloudTrail\DisableFederation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventDataStore
 */
class DisableFederationRequest extends Request
{
    /**
     * @param array{EventDataStore: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
