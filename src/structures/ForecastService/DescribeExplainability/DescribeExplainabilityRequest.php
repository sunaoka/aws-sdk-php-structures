<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeExplainability;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExplainabilityArn
 */
class DescribeExplainabilityRequest extends Request
{
    /**
     * @param array{ExplainabilityArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
