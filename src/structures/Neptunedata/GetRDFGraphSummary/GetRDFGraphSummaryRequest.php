<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetRDFGraphSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'basic'|'detailed'|null $mode
 */
class GetRDFGraphSummaryRequest extends Request
{
    /**
     * @param array{mode?: 'basic'|'detailed'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
