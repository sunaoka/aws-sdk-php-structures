<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\DescribeProblemObservations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProblemId
 * @property string $AccountId
 */
class DescribeProblemObservationsRequest extends Request
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
