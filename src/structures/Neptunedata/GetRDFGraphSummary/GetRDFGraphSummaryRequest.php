<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetRDFGraphSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'basic'|'detailed' $mode
 */
class GetRDFGraphSummaryRequest extends Request
{
    /**
     * @param array{mode?: 'basic'|'detailed'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
