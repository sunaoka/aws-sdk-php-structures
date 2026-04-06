<?php

namespace Sunaoka\Aws\Structures\SecurityIR\BatchGetMemberAccountDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipId
 * @property list<string> $accountIds
 */
class BatchGetMemberAccountDetailsRequest extends Request
{
    /**
     * @param array{
     *     membershipId: string,
     *     accountIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
