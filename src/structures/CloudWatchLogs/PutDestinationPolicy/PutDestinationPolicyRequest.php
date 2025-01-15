<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutDestinationPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $destinationName
 * @property string $accessPolicy
 * @property bool|null $forceUpdate
 */
class PutDestinationPolicyRequest extends Request
{
    /**
     * @param array{
     *     destinationName: string,
     *     accessPolicy: string,
     *     forceUpdate?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
