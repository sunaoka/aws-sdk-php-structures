<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutDestinationPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $destinationName
 * @property string $accessPolicy
 * @property bool $forceUpdate
 */
class PutDestinationPolicyRequest extends Request
{
    /**
     * @param array{
     *     destinationName: string,
     *     accessPolicy: string,
     *     forceUpdate?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
