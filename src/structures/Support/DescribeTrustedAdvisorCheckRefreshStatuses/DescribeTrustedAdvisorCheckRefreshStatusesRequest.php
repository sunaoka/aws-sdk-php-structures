<?php

namespace Sunaoka\Aws\Structures\Support\DescribeTrustedAdvisorCheckRefreshStatuses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $checkIds
 */
class DescribeTrustedAdvisorCheckRefreshStatusesRequest extends Request
{
    /**
     * @param array{checkIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
