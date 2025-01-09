<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetFreeTrialInfo;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $accountIds
 */
class BatchGetFreeTrialInfoRequest extends Request
{
    /**
     * @param array{accountIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
