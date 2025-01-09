<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\GetCostEstimation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 */
class GetCostEstimationRequest extends Request
{
    /**
     * @param array{NextToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
