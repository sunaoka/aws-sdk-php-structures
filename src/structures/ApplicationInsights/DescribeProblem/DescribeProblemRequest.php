<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\DescribeProblem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProblemId
 * @property string|null $AccountId
 */
class DescribeProblemRequest extends Request
{
    /**
     * @param array{
     *     ProblemId: string,
     *     AccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
