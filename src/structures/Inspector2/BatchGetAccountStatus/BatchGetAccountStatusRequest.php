<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetAccountStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $accountIds
 */
class BatchGetAccountStatusRequest extends Request
{
    /**
     * @param array{accountIds?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
