<?php

namespace Sunaoka\Aws\Structures\Personalize\GetSolutionMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $solutionVersionArn
 */
class GetSolutionMetricsRequest extends Request
{
    /**
     * @param array{solutionVersionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
