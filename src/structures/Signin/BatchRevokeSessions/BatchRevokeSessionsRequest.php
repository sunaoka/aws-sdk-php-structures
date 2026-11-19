<?php

namespace Sunaoka\Aws\Structures\Signin\BatchRevokeSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $principalArn
 * @property list<string> $sessionArns
 * @property string|null $reason
 */
class BatchRevokeSessionsRequest extends Request
{
    /**
     * @param array{
     *     principalArn?: string|null,
     *     sessionArns: list<string>,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
