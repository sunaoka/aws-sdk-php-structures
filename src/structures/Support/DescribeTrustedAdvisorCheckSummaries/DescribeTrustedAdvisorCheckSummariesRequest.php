<?php

namespace Sunaoka\Aws\Structures\Support\DescribeTrustedAdvisorCheckSummaries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $checkIds
 */
class DescribeTrustedAdvisorCheckSummariesRequest extends Request
{
    /**
     * @param array{checkIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
