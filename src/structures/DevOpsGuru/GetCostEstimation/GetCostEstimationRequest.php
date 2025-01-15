<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\GetCostEstimation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 */
class GetCostEstimationRequest extends Request
{
    /**
     * @param array{NextToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
