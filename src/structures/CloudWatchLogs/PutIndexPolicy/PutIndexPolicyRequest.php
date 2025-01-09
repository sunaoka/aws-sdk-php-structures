<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutIndexPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupIdentifier
 * @property string $policyDocument
 */
class PutIndexPolicyRequest extends Request
{
    /**
     * @param array{
     *     logGroupIdentifier: string,
     *     policyDocument: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
