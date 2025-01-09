<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetInsightResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InsightArn
 */
class GetInsightResultsRequest extends Request
{
    /**
     * @param array{InsightArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
