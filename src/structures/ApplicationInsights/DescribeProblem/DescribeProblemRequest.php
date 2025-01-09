<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\DescribeProblem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProblemId
 * @property string $AccountId
 */
class DescribeProblemRequest extends Request
{
    /**
     * @param array{
     *     ProblemId: string,
     *     AccountId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
