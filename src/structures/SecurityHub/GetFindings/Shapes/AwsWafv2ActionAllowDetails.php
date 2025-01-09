<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsWafv2CustomRequestHandlingDetails $CustomRequestHandling
 */
class AwsWafv2ActionAllowDetails extends Shape
{
    /**
     * @param array{CustomRequestHandling?: AwsWafv2CustomRequestHandlingDetails} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
